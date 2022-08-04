<?php

namespace learn\src\Config;

class Mysql
{
    static public string $host = 'localhost';

    static public int $port = 3306;

    static public string $database = 'mysql';

    static public string $username = 'root';

    static public string $password = 'root';

    // static public string $prefix = '';
    //
    public const charset = 'utf8mb4';

    // public const collation = 'utf8mb4_general_ci';
}
