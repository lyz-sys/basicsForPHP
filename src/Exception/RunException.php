<?php

namespace learn\src\Exception;

class RunException extends \Exception
{
    public function __construct($message = "")
    {
        parent::__construct($message, -1);
    }

}
