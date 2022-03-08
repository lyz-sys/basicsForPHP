<?php

require_once __DIR__ . '/../vendor/autoload.php';

$consumer = new \learn\src\Kafka\HighConsumer();

$consumer->run();
