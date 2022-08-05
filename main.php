<?php

/**
 * @date 2021-04-21
 * @description learning
 * @author lyzco
 * @brief demo
 * */

declare(strict_types=1);

ini_set('display_errors', 'on');
ini_set('display_startup_errors', 'on');
error_reporting(E_ALL);
date_default_timezone_set('Asia/Shanghai');

require_once __DIR__ . '/vendor/autoload.php';

$set_result = \learn\src\Facade\Redis::set('test', 123456);
$del_result = \learn\src\Facade\Redis::del('test');
var_dump($set_result, $del_result);
