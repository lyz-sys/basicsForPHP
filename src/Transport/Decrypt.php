<?php

namespace learn\src\Transport;

use learn\src\Config\Transport;

class Decrypt
{
    public function decrypt(string $data)
    {
        return openssl_decrypt($data, Transport::cipher, Transport::key, 0, Transport::iv);
    }
}
