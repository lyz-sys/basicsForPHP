<?php

namespace learn\src\Kafka;

use learn\src\Config\Kafka;
use RdKafka\ConsumerTopic;

class LowConsumer
{
    private ConsumerTopic $topic;

    public function __construct()
    {
        $rk = new \RdKafka\Consumer();
        $rk->setLogLevel(LOG_DEBUG);
        $rk->addBrokers(Kafka::$broker);

        $this->topic = $rk->newTopic("testTopic1");
    }

    public function run(): void
    {
        $this->topic->consumeStart(0, RD_KAFKA_OFFSET_BEGINNING);

        while (true) {
            $msg = $this->topic->consume(0, 1000);
            if ($msg->err) {
                echo $msg->errstr(), PHP_EOL;
                break;
            }

            echo $msg->payload, PHP_EOL;
        }
    }
}
