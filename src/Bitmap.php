<?php

namespace src;

class Bitmap
{

    function index()
    {
        # 定义一个数据 开辟储存空间
        $arr = array_fill(0, 2, 0);      //申请一个整形数组, 2个元素, 初始化为整数0
        // $arr = [];
        $int_bit_size = PHP_INT_SIZE * 8; // 每一个int占用的位数 (可储存标记的数量)
        $a = array(1, 2, 3, 6, 6, 7, 9, 1, 11, 105, 97, 31, 66, 58, 69, 25); // 乱序数组

        foreach ($a as $k => $v) {
            $row = (int)floor($v / $int_bit_size);  // 数据储存在第几行
            // echo $v;
            // echo $row;
            // echo '<br>';

            $wei = $v % $int_bit_size;                // 数据储存在第几位
            // echo $wei;
            // echo '<br>';

            // 以下看不懂的 请看文章开头的 知识储备 位运算
            $offset = 1 << $wei;            // 1是 00000001 ； 得到的余数 （位） 假设为3  则左移3位 得到 00001000
            // echo DecBin($offset);
            // echo '<br>';
            $arr[$row] = $arr[$row] | $offset; // 将位改为1  标记储存数据
        }
        echo decbin($arr[0]);
        echo '<br>';
        echo decbin($arr[1]);
        echo '<br>';
        // echo decbin($arr[0]).decbin($arr[1]);
        echo '<br>';
        var_dump($arr);
    }

}
