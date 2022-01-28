<?php

namespace learn\src;

class Brackets
{

    /**
     * 圆括号
     * */
    private static array $Parentheses = ['(', ')'];

    /**
     * 花括号
     * */
    private static array $Bracket = ['{', '}'];

    /**
     * 方括号
     * */
    private static array $SquareBrackets = ['[', ']'];

    public function check(string $string): bool
    {
        $first = $string[0];
        $result = false;
        switch ($first) {
            case self::$Parentheses[0]:
                $type_arr = self::$Parentheses;
                break;
            case self::$Bracket[0]:
                $type_arr = self::$Bracket;
                break;
            case self::$SquareBrackets[0]:
                $type_arr = self::$SquareBrackets;
                break;
        }
        if ($offset = strpos($string, $type_arr[1])) {
            $content_str = substr($string, 1, $offset - 1);
            if (empty($content_str)) {
                $result = true;
            } else {
                return $this->check($content_str);
            }
        }

        return $result;
    }

    public function test(): void
    {
        $test_arr = [
            '()', '()[]{}', '(]', '([)]', '{[]}', '[{}][(]()'
        ];

        foreach ($test_arr as $item) {
            // $result = $this->check($item);
            // $result = $this->stack($item);
            $result = $this->miniCode($item);
            var_dump( 'value:' . $item . ',result:' . $result);
        }
    }

    public function stack(string $string): bool
    {
        $map = [
            ')' => "(",
            "}" => "{",
            "]" => "["
        ];
        $len = strlen($string);
        $stack = [];
        for ($i = 0; $i < $len; $i++) {
            if (empty($stack)) {
                $stack[0] = $string[$i];
                continue;
            }

            if ($map[$string[$i]] !== $stack[0]) {
                array_unshift($stack, $string[$i]);
            } else {
                array_shift($stack);
            }

        }
        return !$stack;
    }

    public function miniCode(string $string): bool
    {
        do {
            $string = str_replace(['()', '[]', '{}'], '', $string, $s);
        } while ($s);

        return empty($string);
    }
}
