<?php

/**
 * qrcode_test
 * @createdAt 2022-08-05
 * */

require_once __DIR__ . '/tests.php';

$qrcode = new learn\src\tools\QrCodeM();

$qrcode->create('/usr/local/var/www/own/basicsForPHP/storage');
