<?php

namespace learn\src;

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
     * @description Private constructs prevent direct new
     * @private
     * */
    private function __construct(string $host, string $auth)
    {
        try {
            $this->_redis = new \Redis();
            $this->_redis->connect($host);
            !empty($auth) && $this->_redis->auth($auth);
        } catch (\Exception $e) {
            error_log('redis connection error' . $e->getMessage());
        }
    }

    /**
     * @description get instance
     * @public
     * */
    public static function getInstance(string $host, string $auth): self
    {
        if (!isset(self::$_instance)) {
            self::$_instance = new self($host, $auth);
        }

        return self::$_instance;
    }

    public function __call(string $method, $ages)
    {
        return $this->_redis->$method(...$ages);
    }

    private function __clone()
    {
    }
}
