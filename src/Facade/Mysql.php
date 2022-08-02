<?php

namespace learn\src\Facade;

class Mysql extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'mysql';
    }
}
