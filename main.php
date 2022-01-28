<?php

/**
 * @date 2021-04-21
 * @description learning
 * @author sys-lyz
 * @brief demo
 * */

declare(strict_types=1);

ini_set('display_errors', 'on');
ini_set('display_startup_errors', 'on');
error_reporting(E_ALL);
date_default_timezone_set('Asia/Shanghai');

require_once __DIR__ . '/vendor/autoload.php';


$conf = new RdKafka\Conf();
$conf->set('log_level', (string)LOG_DEBUG);
$conf->set('debug', 'all');
$producer = new RdKafka\Producer($conf);
$producer->addBrokers("10.0.0.1:9092,10.0.0.2:9092");
