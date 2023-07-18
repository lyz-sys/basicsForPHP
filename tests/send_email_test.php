<?php

/**
 * send_email_test
 * @createdAt 2022-10-09
 * */

require_once __DIR__ . '/tests.php';

$email = new \learn\src\tools\Email();

$emailArray = [
    'test@qq.com'
];

$email->send($emailArray, 'test', 'hhhhhhhhhhhhh');
