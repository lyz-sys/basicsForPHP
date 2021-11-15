<?php

namespace src;

class RedisSingle
{

    /**
     * @description Static private variables save the object itself
     * @private
     * */
    private static $_instance;

    /**
     * @description redis object
     * @private
     * */
    private $_redis;

    /**
     * @description Private constructs prevent direct new
     * @private
     * */
    private function __construct(int $db)
    {
        try {
            $this->_redis = new \Redis();
            $this->_redis->connect('127.0.0.1');
            // $this->_redis->auth('');
            $this->_redis->select($db);
        } catch (\Exception $e) {
            error_log('redis connect error' . $e->getMessage());
        }
    }

    /**
     * @description 实现单例模式
     * @public
     * */
    public static function getInstance(int $db): self
    {
        if (!isset(self::$_instance)) {
            self::$_instance = new self($db);
        }
        return self::$_instance;
    }

    public function get($key)
    {
        return $this->_redis->get($key);
    }

    public function set($key, $val, $exp = null) :bool
    {
        return $this->_redis->set($key, $val, $exp);
    }

    public function keys($key)
    {
        return $this->_redis->keys($key);
    }

    public function setnx($key, $value)
    {
        return $this->_redis->setnx($key, $value);
    }

    public function close()
    {
        return $this->_redis->quit();
    }

    public function incr($key)
    {
        return $this->_redis->incr($key);
    }

    public function sadd($key, $value)
    {
        return $this->_redis->sadd($key, $value);
    }

    public function scard($key)
    {
        return $this->_redis->scard($key);
    }

    public function sinter($key1, $key2)
    {
        return $this->_redis->sinter($key1, $key2);
    }

    public function sinterstore($key, $key1, $key2)
    {
        return $this->_redis->sinterstore($key, $key1, $key2);
    }

    public function sdiff($key1, $key2)
    {
        return $this->_redis->sdiff($key1, $key2);
    }

    public function sdiffstore($key, $key1, $key2)
    {
        return $this->_redis->sdiffstore($key, $key1, $key2);
    }

    public function sunion($key1, $key2)
    {
        return $this->_redis->sunion($key1, $key2);
    }

    public function sunionstore($key, $key1, $key2)
    {
        return $this->_redis->sunionstore($key, $key1, $key2);
    }

    public function lpush($key, $value)
    {
        return $this->_redis->lpush($key, $value);
    }

    public function rpush($key, $value)
    {
        return $this->_redis->rpush($key, $value);
    }

    public function lrems($key, $value, $data = 0)
    {
        return $this->_redis->lrem($key, $value, $data);
    }

    public function lrange($key)
    {
        return $this->_redis->lrange($key, 0, -1);
    }

    public function rpop($key)
    {
        return $this->_redis->rpop($key);
    }

    public function brpop($key, $timeout)
    {
        return $this->_redis->brpop($key, $timeout);
    }

    public function rpoplpush($key_pop, $key_push)
    {
        return $this->_redis->rpoplpush($key_pop, $key_push);
    }

    public function smembers($key)
    {
        return $this->_redis->smembers($key);
    }

    public function lock($key)
    {
        return $this->_redis->setnx($key, 1);
    }

    public function zscore($zset_key, $scroe)
    {
        return $this->_redis->zscore($zset_key, $scroe);
    }

    public function zadd($zset_key, $scroe, $member)
    {
        return $this->_redis->zadd($zset_key, $scroe, $member);
    }

    public function del($key)
    {
        return $this->_redis->del($key);
    }

    public function zrangebyscore($key, $min, $max, $withscores = array())
    {
        return $this->_redis->zrangebyscore($key, $min, $max, $withscores);
    }

    public function hset($key, $filed, $value)
    {
        return $this->_redis->hset($key, $filed, $value);
    }

    public function hsetnx($key, $filed, $value)
    {
        return $this->_redis->hsetnx($key, $filed, $value);
    }

    public function hget($key, $filed)
    {
        return $this->_redis->hget($key, $filed);
    }

    public function hexists($key, $filed)
    {
        return $this->_redis->hexists($key, $filed);
    }

    public function hincrby($key, $field, $incr)
    {
        return $this->_redis->hincrby($key, $field, $incr);
    }

    public function hgetall($key)
    {
        return $this->_redis->hgetall($key);
    }

    public function hdel($key, $field)
    {
        return $this->_redis->hdel($key, $field);
    }

    public function hkeys($key)
    {
        return $this->_redis->hkeys($key);
    }

    public function hlen($key)
    {
        return $this->_redis->hlen($key);
    }

    public function srem($key, $member)
    {
        return $this->_redis->srem($key, $member);
    }

    public function zremrangebyscore($key, $min, $max)
    {
        return $this->_redis->zremrangebyscore($key, $min, $max);
    }

    public function sismember($key, $member)
    {
        return $this->_redis->sismember($key, $member);
    }

    public function publish($key, $msg)
    {
        return $this->_redis->publish($key, $msg);
    }

    public function subscribe($key)
    {
        return $this->_redis->subscribe($key);
    }

    public function zcard($key)
    {
        return $this->_redis->zcard($key);
    }

    public function zrange($key, $start, $stop, $withscores = '')
    {
        return $this->_redis->zrange($key, $start, $stop, $withscores);
    }

    public function zrem($key, $member)
    {
        return $this->_redis->zrem($key, $member);
    }

    public function zincrby($key, $score, $member)
    {
        return $this->_redis->zincrby($key, $score, $member);
    }

    public function zcount($key, $min, $max)
    {
        return $this->_redis->zcount($key, $min, $max);
    }

    public function expire($key, $seconds)
    {
        return $this->_redis->expire($key, $seconds);
    }

    public function pexpire($key, $seconds)
    {
        return $this->_redis->pexpire($key, $seconds);
    }

    public function incrby($key, $num)
    {
        return $this->_redis->incrby($key, $num);
    }

    public function llen($key)
    {
        return $this->_redis->llen($key);
    }

    public function lrem($key, $count, $value)
    {
        return $this->_redis->lrem($key, $count, $value);
    }

    public function info()
    {
        return $this->_redis->info();
    }

    public function exists($key)
    {
        return $this->_redis->exists($key);
    }

    public function ttl($key)
    {
        return $this->_redis->ttl($key);
    }

    public function select($db_num)
    {
        return $this->_redis->select($db_num);
    }

    public function zrevrangebyscore($key, $start, $stop, $options = '')
    {
        return $this->_redis->zrevrangebyscore($key, $start, $stop, $options);
    }

    public function zrevrange($key, $start, $stop, $options = array())
    {
        return $this->_redis->zrevrange($key, $start, $stop, $options);
    }

    public function pipeline()
    {
        $pipe = $this->_redis->pipeline();
        return $pipe;
    }

    public function type($key)
    {
        return $this->_redis->type($key);
    }

    public function mget($key_array)
    {
        return $this->_redis->mget($key_array);
    }

    public function decr($key)
    {
        return $this->_redis->decr($key);
    }

    public function decrby($key)
    {
        return $this->_redis->decrby($key, $num);
    }

    public function setbit($key, $offset, $value)
    {
        return $this->_redis->setbit($key, $offset, $value);
    }

    public function getbit($key, $offset)
    {
        return $this->_redis->getbit($key, $offset);
    }

    public function bitcount($key, $start = 0, $end = -1)
    {
        return $this->_redis->bitcount($key, $start, $end);
    }

    public function expireat($key, $timestamp)
    {
        return $this->_redis->expireat($key, $timestamp);
    }
}
