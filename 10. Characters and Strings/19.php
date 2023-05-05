<?php

/*
 * 10.19. Дана строка. Вывести подстроку, расположенную
        между первой и второй точками исходной строки. Если
        в строке менее двух точек, то вывести всю исходную
        строку.
*/

function foo($string) {
    $first_dot_pos = strpos($string, '.');
    if($first_dot_pos === false) {
        echo $string;
        exit;
    }

    $second_dot_pos = strpos($string, '.', $first_dot_pos + 1);
    if($second_dot_pos === false) {
        echo $string;
        exit;
    }

    $sub_string = substr($string, $first_dot_pos + 1, $second_dot_pos - $first_dot_pos - 1);
    echo $sub_string;
}

foo("abc.def.ghi");