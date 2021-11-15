<?php

namespace src;

class FileOperation
{
    /**
     * @public
     * @description get files last number of rows
     * @param string $file file path
     * @param int $num number of rows
     * @return array
     */
    public function getFileCountBackWards(string $file, int $num): array
    {
        if (empty($file) || $num < 1){
            return [];
        }
        $fp = fopen($file, 'rb');
        if (!$fp){
            return [];
        }
        $pos = -2;
        $eof = "";
        $head = false;
        $lines = array();
        while ($num > 0) {
            while ($eof != PHP_EOL) {//遇到换行
                if (fseek($fp, $pos, SEEK_END) == 0) {
                    $eof = fgetc($fp);
                    $pos--;
                } else {
                    fseek($fp, 0, SEEK_SET);
                    $head = true;
                    break;
                }
            }
            array_unshift($lines, str_replace(PHP_EOL, '', fgets($fp)));
            if ($head) {
                break;
            }
            $eof = "";
            $num--;
        }
        fclose($fp);
        return $lines;
    }

}
