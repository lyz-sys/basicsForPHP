<?php

namespace learn\src\Db;

use learn\src\Config\Mysql;
use learn\src\Exception\RunException;
use PDO;
use ReflectionClass;

class PdoMysqlManager
{
    /**
     * @description pdo mysql object
     * @private
     * */
    private PDO $_mysql;

    /**
     * @description pdo mysql ReflectionClass
     * @private
     * */
    private ReflectionClass $mysqlReflectionClass;

    public function __construct()
    {
        $dsn = sprintf('mysql:host=%s;port=%d;dbname=%s;charset=%s', Mysql::$host, Mysql::$port, Mysql::$database, Mysql::charset);
        $this->_mysql = new PDO($dsn, Mysql::$username, Mysql::$password);
        $this->mysqlReflectionClass = new ReflectionClass($this->_mysql);
    }

    /**
     * @throws \ReflectionException
     * @throws RunException
     */
    public function __call(string $method, array $arguments = [])
    {
        if (!$this->mysqlReflectionClass->hasMethod($method) || !$this->mysqlReflectionClass->getMethod($method)->isPublic()) {
            throw new RunException('Method does not exist');
        }

        return $this->_mysql->$method(...$arguments);
    }
}
