<?php

namespace learn\src\Commands;

abstract class Base
{
    public function __construct()
    {
        pcntl_async_signals(false);
        pcntl_signal(SIGTERM, [$this, 'signalHandler']);
        pcntl_signal(SIGINT, [$this, 'signalHandler']);
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    abstract public function handle(): void;

    /**
     * Process the received signal
     * @param int $signal
     *
     * @return void
     */
    public function signalHandler(int $signal): void
    {
        switch ($signal) {
            case SIGINT:
                echo "你按了Ctrl+C,请等待程序执行完" . PHP_EOL;
            case SIGTERM:
                exit();
            default:
                break;
        }
    }

    /**
     * Do slice processing in the loop
     * @param callable $function execution method
     * @param mixed ...$values method param
     *
     * @return void
     */
    final public function loopExecutionFunctionHandler(callable $function, ...$values): void
    {
        while (true) {
            $function(...$values);
            pcntl_signal_dispatch();
        }
    }
}

