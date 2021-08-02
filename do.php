<?php
/**
 * @date 2021-04-21
 * @deprecated learning
 * @author lyz
 * @brief demo
 * */

// namespace www\doController;

date_default_timezone_set('PRC');
error_reporting(E_ALL || ~E_NOTICE);

include_once('/usr/local/var/www/930bar-new/ThinkPHP/Common/functions.php');
//冒泡排序
// function paixu($arr)
// {
//     $len = count($arr);
//     for ($i = 0; $i < $len - 1; $i++) {//循环比对的轮数
//         for ($j = $i + 1; $j < $len; $j++) {//从第二个开始循环，循环到最后一个，逐一和第一个比较
//             if ($arr[$i] > $arr[$j]) {//前边大于后边的则交换
//                 $tmp = $arr[$i];
//                 $arr[$i] = $arr[$j];
//                 $arr[$j] = $tmp;
//             }
//         }
//     }
//     return $arr;
// }

//快排算法
function quickSort($arr)
{
    $count = count($arr);
    if ($count <= 1) {
        return $arr;
    }
    $index = $arr[0];
    $left = [];
    $right = [];
    for ($i = 1; $i < $count; $i++) {
        if ($arr[$i] < $index) {
            $left[] = $arr[$i];
        } else {
            $right[] = $arr[$i];
        }
    }
    $left  = quickSort($left);
    $right = quickSort($right);
    return array_merge($left, [$arr[0]], $right);
}


interface th{
    public function index();
    // public function kmpdo($Tstring, $Pstring, $next);
}

//php配置信息
class phpinfo implements th{

    /**
     * @description 静态私有变量保存对象本身
     * @private
     * */
    private static $_instance;

    /**
     * @description 私有构造防止直接new
     * @private
     * */
    private function __construct()
    {
    }

    public function index(){
        phpinfo();
    }

    /**
     * @description 实现单例模式
     * @public
     * */
    public static function getInstance()
    {
        if( !isset(self::$_instance) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
}

$phpInfo = phpinfo::getInstance();
$phpInfo->index();die();
// call_user_func(array('phpinfo','index'));die();

class str implements th{
    public $ssss;
    function filter($string){
        $string = str_replace('x','zz',$string);
        return $string;
            // str_replace('trple','',$string);
    }
    function index(){
        $user = array('tr1ple', 'aaaaax');

        echo(serialize($user));
        echo "<br/>";

        $r = $this->filter(serialize($user));

        echo($r);
        echo "<br/>";

        var_dump(unserialize($r));
        echo "<br/>";
        $a='a:2:{i:0;s:6:"tr1ple";i:1;s:5:"aaaaa";}i:1;s:5:"aaaaa";';
        var_dump(unserialize($a));
    }
    
    function indexTwo(){
        $username = 'trpletrpletrpletrplexxxxxxxxxxxxxxxxxxxx";i:1;s:6:"123456";}'; //其中红色就是我们想要注入的属性值
        $password="aaaaa";
        $user = array($username, $password);
        $str = serialize($user);
        echo($str);
        echo "<br/>";

        $r = $this->filter($str);

        echo($r);
        echo "<br/>";
        var_dump(unserialize($r));
    }
}
$str = new str;
call_user_func([$str,'indexTwo']);die();

//KMP算法
class KMP implements th{
    function index(){
        $next = array(0);
        $Tstring = "ababxbababcadfdsssabcdabdrwgewwrabcdabd";
        $Pstring = "abcdabd";

        $this->kmpdo($Tstring, $Pstring, $next); // 计算部分匹配表和字符串匹配算法
    }

    public function kmpdo($Tstring, $Pstring, &$next)
    {
        $n = strlen($Tstring); // 字符串
        $m = strlen($Pstring);
        $this->makeNext($Pstring,$next); // 计算模式匹配表
        die();

        for ($i = 0, $q = 0; $i < $n; ++$i)
        {
            while($q > 0 && $Pstring[$q] != $Tstring[$i])
                $q = $next[$q-1];
            if ($Pstring[$q] == $Tstring[$i])
            {
                $q++;
            }
            if ($q == $m)
            {
                printf("Pattern occurs with shift:%d ",($i - $m + 1));
                printf(" You find string is:%s\n", $Pstring);
                echo "<br>";
            }
        }
    }
    public function makeNext($Pstring, &$next)
    {
        $m = strlen($Pstring); // 此时为数组
        $next[0] = 0;
        for ($q = 1, $k = 0; $q < $m; ++$q)
        {
            while($k > 0 && $Pstring[$q] != $Pstring[$k])
                $k = $next[$k-1];
            if ($Pstring[$q] == $Pstring[$k])
            {
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
$KMP = new KMP();
call_user_func(array($KMP,'index'));die();

//bitMap算法
class bitMap implements th{
    function index(){
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
call_user_func(array('bitMap','index'));

