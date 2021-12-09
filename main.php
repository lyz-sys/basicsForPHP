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

require_once __DIR__ . '/vendor/autoload.php';

try {
    (new src\User\SetUser())->init(['name' => 'self',
        'email' => 'email@email.com',
        'phone' => random_int(1000000, 10000000000)]);
} catch (Exception $exception) {
    throw new src\Exception\RunException('error');
}

echo src\User\User::$name;
