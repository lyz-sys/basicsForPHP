<?php

namespace src;

class Kmp
{
    function index()
    {
        $next = array(0);
        $Tstring = "ababxbababcadfdsssabcdabdrwgewwrabcdabd";
        $Pstring = "abcdabd";

        $this->kmpdo($Tstring, $Pstring, $next); // 计算部分匹配表和字符串匹配算法
    }

    public function kmpdo($Tstring, $Pstring, &$next)
    {
        $n = strlen($Tstring); // 字符串
        $m = strlen($Pstring);
        $this->makeNext($Pstring, $next); // 计算模式匹配表

        for ($i = 0, $q = 0; $i < $n; ++$i) {
            while ($q > 0 && $Pstring[$q] != $Tstring[$i])
                $q = $next[$q - 1];
            if ($Pstring[$q] == $Tstring[$i]) {
                $q++;
            }
            if ($q == $m) {
                printf("Pattern occurs with shift:%d ", ($i - $m + 1));
                printf(" You find string is:%s\n", $Pstring);
                echo "<br>";
            }
        }
    }

    public function makeNext($Pstring, &$next)
    {
        $m = strlen($Pstring); // 此时为数组
        $next[0] = 0;
        for ($q = 1, $k = 0; $q < $m; ++$q) {
            while ($k > 0 && $Pstring[$q] != $Pstring[$k])
                $k = $next[$k - 1];
            if ($Pstring[$q] == $Pstring[$k]) {
                $k++;
            }
            $next[$q] = $k;
        }
        printf("The next table is:\n");
        for ($i = 0, $iMax = strlen($Pstring); $i < $iMax; ++$i) {
            printf("%d ", $next[$i]);
        }
        echo "<br>";
    }
}
