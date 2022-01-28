<?php

/**
 * Delay execution
 * @param int $seconds Halt time in seconds.
 *
 * @return int zero on success. If the call was interrupted
 * by a signal, sleep returns the number of seconds left
 * to sleep.
 * */
function wait(int $seconds): int
{
    $secondsLeft = 0;
    while ($seconds > 0) {
        if ($seconds > 10) {
            $secondsLeft = (int)sleep(10);
            $seconds -= 10;
            if ($secondsLeft > 0) {
                break;
            }
        } else {
            $secondsLeft = (int)sleep($seconds);
            $seconds = 0;
            break;
        }
    }
    return $seconds + $secondsLeft;
}

