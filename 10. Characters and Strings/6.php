<?php

/*
 * 10.6. Дана строка. Если она представляет собой запись
        целого числа, то вывести 1; если вещественного (с
        дробной частью), то вывести 2; если строку нельзя
        преобразовать в число, то вывести 0.
*/

function stringCheckForNum($string) {
    $intVal = intval($string);
    if($intVal == $string) {
        echo "1";
    } else {
        $floatVal = floatval($string);
        if($floatVal == $string) {
            echo "2";
        } else {
            echo 0;
        }
    }
}

stringCheckForNum('123.53');