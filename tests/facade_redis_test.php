<?php

/**
 * facade_redis_test
 * @createdAt 2022-08-09
 * */

require_once 'tests.php';

\learn\src\Facade\Redis::set('test', 123456);
$res = \learn\src\Facade\Redis::get('test');
var_dump($res);

\learn\src\Facade\Redis::geoAdd("hawaii",
    -122.431, 37.773, "San Francisco"
);
\learn\src\Facade\Redis::geoAdd("hawaii",
    -157.858, 21.315, "Honolulu"
);
$res = \learn\src\Facade\Redis::geoDist("hawaii", "Honolulu", "San Francisco");
var_dump($res);

var_dump(\learn\src\Facade\Redis::geoPos('hawaii', 'San Francisco'));
var_dump(\learn\src\Facade\Redis::geoPos('hawaii', 'Honolulu'));

\learn\src\Facade\Redis::del('test');
\learn\src\Facade\Redis::del('hawaii');
