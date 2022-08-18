<?php

/**
 * swoole_websocket_test
 * @createdAt 2022-08-18
 * */

require_once 'tests.php';

$ws = new \learn\src\SwooleDemo();

$ws->setHost('127.0.0.1')->setPort('9502');

$ws->websocket();
