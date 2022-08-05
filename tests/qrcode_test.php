<?php

require_once 'tests.php';

$qrcode = new learn\src\tools\QrCodeM();

$qrcode->create('/usr/local/var/www/own/basicsForPHP/storage');
