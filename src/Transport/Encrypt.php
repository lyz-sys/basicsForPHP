<?php

namespace learn\src\Transport;

use learn\src\Config\Transport;

class Encrypt
{
    public function encrypt(string $data): string
    {
        return openssl_encrypt($data, Transport::cipher, Transport::key, 0, Transport::iv);
    }

}
