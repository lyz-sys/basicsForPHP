<?php

require_once __DIR__ . '/../vendor/autoload.php';

$producer = new \learn\src\Kafka\Producer();

$producer->run();
