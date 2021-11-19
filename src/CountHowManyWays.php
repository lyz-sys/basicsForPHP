<?php

namespace learn\src;

// There are n steps
// you can take one or two steps at a time
// how many ways to finish them

class CountHowManyWays
{
    public function contNum(int $step): int
    {
        if ($step === 1) {
            return 1;
        }

        if ($step === 2) {
            return 2;
        }
        return $this->contNum($step - 1) + $this->contNum($step - 2);
    }

}
