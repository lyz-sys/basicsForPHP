<?php

/**
 * @date 2021-04-21
 * @deprecated learning
 * @author sys-lyz
 * @brief demo
 * */

declare(strict_types=1);

use learn\src as src;

ini_set('display_errors', 'on');
ini_set('display_startup_errors', 'on');
error_reporting(E_ALL);
date_default_timezone_set('Asia/Shanghai');

require_once __DIR__.'/vendor/autoload.php';

// $swoole = new src\SwooleDemo();
// $swoole->setHost('127.0.0.1')->setPort(9501);
// $swoole->tcp();
// $swoole->udp();
// $swoole->http();
// $swoole->websocket();

// $carbonTest = new src\CarbonTest;
// echo $carbonTest->handle('2021-11-11 11:11:11');
// die();
//
// $CountHowManyWays = new src\CountHowManyWays();
//
// echo $CountHowManyWays->contNum(50).PHP_EOL;
// die();

// $redis = src\RedisSingle::getInstance(2);
// $redis->set('test',2222);
// echo $redis->del('test');die();
//
// $kmp = new src\Kmp();
//
// $kmp->index();die();

// $bitmap = new src\Bitmap();
// $bitmap->index();

// $mysql = new src\MysqlConnectionPool(5);
//
// $conn = $mysql->getConn();
// $result = $conn->query('SELECT * FROM demo where id=1 ');
// var_dump($result->fetch_assoc());

