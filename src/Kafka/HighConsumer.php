<?php

namespace learn\src\Kafka;

use learn\src\Config\Kafka;
use learn\src\Exception\RunException;
use RdKafka\Conf;
use RdKafka\KafkaConsumer;

class HighConsumer
{
    private KafkaConsumer $topic;

    public function __construct()
    {
        $conf = new Conf();
        $conf->set('metadata.broker.list', Kafka::$broker);
        $conf->set('group.id', 'myConsumer1');
        $conf->set('auto.offset.reset', 'smallest');

        $conf->setRebalanceCb(function (KafkaConsumer $kafka, $err, array $partitions = null) {
            switch ($err) {
                case RD_KAFKA_RESP_ERR__ASSIGN_PARTITIONS:
                    echo 'partitions：';
                    $kafka->assign($partitions);
                    break;
                case RD_KAFKA_RESP_ERR__REVOKE_PARTITIONS:
                    $kafka->assign(NULL);
                    break;
                default:
                    throw new RunException($err);
            }
        });

        $conf->set('fetch.wait.max.ms', 50);
        $conf->set('socket.timeout.ms', 1050);//1000ms greater than fetch.wait.max.ms
        // $conf->set('internal.termination.signal', SIGIO);

        $this->topic = new KafkaConsumer($conf);

        $this->topic->subscribe(['testTopic1']);
    }

    public function run(): void
    {
        while (true) {
            $message = $this->topic->consume(100000);
            switch ($message->err) {
                case RD_KAFKA_RESP_ERR_NO_ERROR:
                    var_dump($message);
                    break;
                case RD_KAFKA_RESP_ERR__PARTITION_EOF:
                    echo "No more messages; will wait for more\n";
                    break;
                case RD_KAFKA_RESP_ERR__TIMED_OUT:
                    echo "Timed out\n";
                    break;
                default:
                    throw new RunException($message->errstr(), $message->err);
            }
        }

    }
}
