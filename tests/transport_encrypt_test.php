<?php

use learn\src\Transport\Decrypt;
use learn\src\Transport\Encrypt;

require_once 'tests.php';

$encrypt = new Encrypt();
$decrypt = new Decrypt();

$data_source = json_encode([
    'userName' => 'hasaki',
    'age' => 18,
    'gender' => 1
], JSON_THROW_ON_ERROR);

$encrypt_data = $encrypt->encrypt($data_source);

var_dump($encrypt_data);

$decrypt_data = $decrypt->decrypt($encrypt_data);

var_dump($decrypt_data);
