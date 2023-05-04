<?php

/*
 * 10.11. Дана строка S и число N. Преобразовать строку S в
        строку длины N следующим образом: если длина
        строки S больше N, то отбросить первые символы,
        если длина строки S меньше N, то в ее начало
        добавить символы "." (точка).
*/

function foo($string, $n) {
    if (strlen($string) >= $n) {
        $different = strlen($string) - $n;
        $string = str_split($string);
        $string = array_slice($string, $different);

        foreach ($string as $k) {
            echo $k;
        }
    } else {
        $string = '.' . $string;
        echo $string;
    }


}

foo('4321', 5);