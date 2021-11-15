<?php

use src\RedisSingle;

require'vendor/autoload.php';

date_default_timezone_set('Asia/Shanghai');
error_reporting(E_ALL || ~E_NOTICE);

/**
 * @date 2021-04-21
 * @deprecated learning
 * @author sys-lyz
 * @brief demo
 * */

// $carbonTest = new \src\CarbonTest();
//
// echo $carbonTest->handle('2021-11-11 11:11:11');
// die();
//
// $CountHowManyWays = new \src\CountHowManyWays();
//
// echo $CountHowManyWays->contNum(50).PHP_EOL;
// die();

// $redis = RedisSingle::getInstance(2);
// $redis->set('test',2222);
// echo $redis->del('test');die();
//
// $kmp = new \src\Kmp();
//
// $kmp->index();die();

// $bitmap = new \src\Bitmap();
// $bitmap->index();

// $mysql = new \src\MysqlConnectionPool(5);
//
// $conn = $mysql->getConn();
// $result = $conn->query('SELECT * FROM demo where id=1 ');
// var_dump($result->fetch_assoc());

