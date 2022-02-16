<?php

namespace learn\src\Kafka;

use learn\src\Exception\RunException;

class Consumer
{
    private \RdKafka\KafkaConsumer $topic;

    public function __construct()
    {
        $conf = new \RdKafka\Conf();

        // Set the group id. This is required when storing offsets on the broker
        $conf->setRebalanceCb(function (\RdKafka\KafkaConsumer $kafka, $err, array $partitions = null) {
            switch ($err) {
                case RD_KAFKA_RESP_ERR__ASSIGN_PARTITIONS:
                    $kafka->assign($partitions);
                    break;
                case RD_KAFKA_RESP_ERR__REVOKE_PARTITIONS:
                    $kafka->assign(NULL);
                    break;
                default:
                    throw new RunException($err);
            }
        });
        $conf->set('group.id', 'myConsumer');

        $conf->set('metadata.broker.list', '127.0.0.1:9092');

        $conf->set('fetch.wait.max.ms', 50);
        $conf->set('socket.timeout.ms', 1050);//1000ms greater than fetch.wait.max.ms

        $conf->set('internal.termination.signal', SIGIO);

        $this->topic = new \RdKafka\KafkaConsumer($conf);

        $this->topic->subscribe(['test']);
    }

    public function run(): void
    {
        while (true) {
            $message = $this->topic->consume(120 * 10000);
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
