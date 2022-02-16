<?php

require_once __DIR__ . '/../vendor/autoload.php';

$consumer = new \learn\src\Kafka\Consumer();

$consumer->run();
