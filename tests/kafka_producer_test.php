<?php

/**
 * kafka_producer_test
 * @createdAt 2022-02-16
 * */

require_once __DIR__ . '/tests.php';

$producer = new \learn\src\Kafka\Producer();

$producer->run();
