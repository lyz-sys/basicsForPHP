<?php

namespace learn\src\Kafka;

class Producer
{
    private \RdKafka\Producer $producer;

    private \RdKafka\ProducerTopic $topic;

    public function __construct()
    {
        $conf = new \RdKafka\Conf();
        $conf->set('metadata.broker.list', '127.0.0.1:9092');
        $conf->set('log_level', (string)LOG_DEBUG);
        $conf->set('debug', 'all');
        $this->producer = new \RdKafka\Producer($conf);
        // $this->producer->addBrokers("127.0.0.1:9092");
        $topicConf = new \RdKafka\TopicConf();
        $topicConf->set('request.required.acks', 0);
        $this->topic = $this->producer->newTopic("test", $topicConf);
    }

    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            $this->topic->produce(RD_KAFKA_PARTITION_UA, 0, "Message $i");
            $this->producer->poll(10);
        }

        $result = $this->producer->flush(10000);

        if (RD_KAFKA_RESP_ERR_NO_ERROR !== $result) {
            throw new \RuntimeException('Was unable to flush, messages might be lost!');
        }
    }

}
