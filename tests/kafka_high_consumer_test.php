<?php

require_once 'tests.php';

$consumer = new \learn\src\Kafka\HighConsumer();

$consumer->run();
