<?php

namespace learn\src\Facade;

use learn\src\Db\MysqlManager;
use learn\src\Db\RedisManager;
use learn\src\Exception\RunException;

abstract class Facade
{
    /**
     * The resolved object instances.
     *
     * @var array
     */
    protected static $resolvedInstance;

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    abstract protected static function getFacadeAccessor(): string;

    /**
     * Get the root object behind the facade.
     *
     * @return mixed
     * @throws RunException
     */
    public static function getFacadeRoot()
    {
        if (empty(static::getFacadeAccessor())) {
            throw new RunException('Facade does not implement getFacadeAccessor method.');
        }

        return static::resolveFacadeInstance(static::getFacadeAccessor());
    }

    /**
     * Resolve the facade root instance from the container.
     *
     * @param object|string $name
     * @return mixed
     * @throws RunException
     */
    protected static function resolveFacadeInstance($name)
    {
        if (is_object($name)) {
            return $name;
        }

        if (isset(static::$resolvedInstance[$name])) {
            return static::$resolvedInstance[$name];
        }

        throw new RunException('Facade does not implement getFacadeAccessor method.');
    }

    /**
     * Handle dynamic, static calls to the object.
     *
     * @param string $method
     * @param array $args
     * @return mixed
     *
     * @throws RunException
     */
    public static function __callStatic($method, $args)
    {
        if (empty(static::$resolvedInstance)) {
            static::boot();
        }

        $instance = static::getFacadeRoot();

        if (!$instance) {
            throw new RunException('A facade root has not been set.');
        }

        return $instance->$method(...$args);
    }

    /**
     * Load container.
     * */
    public static function boot(): void
    {
        static::$resolvedInstance['mysql'] = new MysqlManager();
        static::$resolvedInstance['redis'] = RedisManager::getInstance();
    }

}
