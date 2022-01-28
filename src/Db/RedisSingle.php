<?php

namespace learn\src\Db;

use learn\src\Config\Redis as Config;
use learn\src\Exception\RunException;
use ReflectionClass;

class RedisSingle
{
    /**
     * @description Static private variables save the object itself
     * @private
     * */
    private static RedisSingle $_instance;

    /**
     * @description redis object
     * @private
     * */
    private \Redis $_redis;

    /**
     * @description redis ReflectionClass
     * @private
     * */
    private ReflectionClass $redisReflectionClass;

    /**
     * @description Private constructs prevent direct new
     * @private
     * */
    private function __construct()
    {
        try {
            $this->_redis = new \Redis();
            $this->redisReflectionClass = new ReflectionClass($this->_redis);
            $this->_redis->connect(Config::$host, Config::$port);
            !empty(Config::$auth) && $this->_redis->auth(Config::$auth);
            $this->_redis->select(Config::$db);
        } catch (\Exception $e) {
            error_log('redis connection error' . $e->getMessage());
        }
    }

    /**
     * @description get instance
     * @public
     * */
    public static function getInstance(): self
    {
        if (!isset(self::$_instance)) {
            self::$_instance = new self;
        }

        return self::$_instance;
    }

    /**
     * @throws \ReflectionException
     * @throws RunException
     */
    public function __call(string $method, ...$arguments)
    {
        if (!$this->redisReflectionClass->hasMethod($method) || !$this->redisReflectionClass->getMethod($method)->isPublic()) {
            throw new RunException('Method does not exist');
        }

        return $this->_redis->$method(...$arguments);
    }

    private function __clone()
    {
    }
}
