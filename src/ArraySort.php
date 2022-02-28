<?php

namespace learn\src;

class ArraySort
{
    /**
     * @public
     * @description bubble sort
     * @param array $arr
     * @return array sorted array
     * */
    public function bubbleSort(array $arr): array
    {
        if (empty($arr)) {
            return $arr;
        }
        $len = count($arr);
        for ($i = 0; $i < $len - 1; $i++) {
            for ($j = $i + 1; $j < $len; $j++) {
                if ($arr[$i] > $arr[$j]) {
                    $tmp = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $tmp;
                }
            }
        }
        return $arr;
    }

    /**
     * @public
     * @description quick sort
     * @param array $arr
     * @return array sorted array
     * */
    public function quickSort(array $arr): array
    {
        if (empty($arr)) {
            return $arr;
        }
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
        $left = $this->quickSort($left);
        $right = $this->quickSort($right);
        return array_merge($left, [$arr[0]], $right);
    }

    /**
     * @public
     * @description insert sort
     * @param array $arr
     * @return array sorted array
     * */
    public function insertSort(array $arr): array
    {
        if (empty($arr)) {
            return $arr;
        }
        for ($i = 1, $iMax = count($arr); $i < $iMax; $i++) {
            $temp = $arr[$i];
            for ($j = $i - 1; $j >= 0 && $arr[$j] > $temp; $j--) {
                $arr[$j + 1] = $arr[$j];
            }

            $arr[$j + 1] = $temp;//due to j--
        }
        return $arr;
    }

    /**
     * @public
     * @description insert sort
     * @param array $arr
     * @return array sorted array
     * */
    public function selectSort(array $arr): array
    {
        if (empty($arr)) {
            return $arr;
        }
        $new_array = [];
        for ($i = 0, $iMax = count($arr); $i < $iMax; $i++) {
            $arr = array_values($arr);
            $min = 0;
            for ($j = 1; $j < $iMax; $j++) {
                if (array_key_exists($j, $arr) && $arr[$min] > $arr[$j]) {
                    $min = $j;
                }
            }
            $new_array[] = $arr[$min];
            unset($arr[$min]);
        }
        return $new_array;
    }

    /**
     * @public
     * @description shell sort
     * @param array $arr
     * @return array sorted array
     * */
    public function shellSort(array $arr): array
    {
        if (empty($arr)) {
            return $arr;
        }
        $gap = count($arr) - 1;
        $max = count($arr) - 1;
        do {
            $gap /= 2;
            for ($i = 0; $i <= $max - $gap; $i++) {
                for ($j = $i; $j <= $max - $gap; $j += $gap) {
                    if ($arr[$j] > $arr[$j + $gap]) {
                        $temp = $arr[$j];
                        $arr[$j] = $arr[$j + $gap];
                        $arr[$j + $gap] = $temp;
                    }
                }
            }
        } while ($gap > 1);
        return $arr;
    }

    /**
     * @public
     * @description heap sort
     * @param array $arr
     * @return array sorted array
     * */
    public function heapSort(array $arr): array
    {
        if (empty($arr)) {
            return $arr;
        }
        $funcHeap = static function (&$array, $i, $length) {
            if ($i < 0) {
                return;
            }
            $tmp = $array[$i];
            for ($j = $i * 2 + 1; $j < $length; $j = $j * 2 + 1) {
                if ($j + 1 < $length && $array[$j] < $array[$j + 1]) {//右子节点比左子节点大
                    $j++;
                }

                if ($array[$j] > $tmp) {
                    //子节点比父节点大,则将子节点的值赋给父节点(不用交换)
                    $array[$i] = $array[$j];
                    $i = $j;
                } else {
                    break;
                }
            }
            $array[$i] = $tmp;//实现交换(i有变化时) /*iii*/it
        };

        $count = count($arr);
        for ($i = floor($count / 2) - 1; $i >= 0; $i--) {
            $funcHeap($arr, $i, $count);

        }
        for ($j = $count - 1; $j >= 0; $j--) {
            $tmp = $arr[0];
            $arr[0] = $arr[$j];
            $arr[$j] = $tmp;
            $funcHeap($arr, 0, $j);
        }
        return $arr;
    }

    //todo next time
    /**
     * @public
     * @description heap sort
     * @param array $arr
     * @return array sorted array
     * */
    public function mergeSort(array $arr): array
    {
        if (empty($arr)) {
            return $arr;
        }
        $count = count($arr);
        for ($gap = 1; $gap < $count; $gap *= 2) {
            for ($i = 0; $i + $gap * 2 - 1 < $count; $i = $i + 2 * $gap) {

            }
            if ($i + $gap - 1 < $count) {

            }
        }

        return $arr;
    }

}
