<?php

/*
 * 13.10. Описать функцию BinToDec(S) целого типа, которая
        определяет целое неотрицательное число по его
        строковому представлению S в двоичной системе
        счисления. Параметр S имеет тип string, состоит из
        символов '0'–'1' и не содержит ведущих нулей (за
        исключением значения '0'). Используя эту функцию,
        вывести пять чисел, для которых даны их двоичные
        представления.
*/

function BinToDec($S) {
    $sum = 0;
    $digits = str_split($S);
    $digits = array_map('intval', $digits);
    $digits = array_reverse($digits);

    for($i = 0; $i < count($digits); $i++) {
        if($digits[$i] == 0) {
            continue;
        } else {
            $sum += pow(2, $i);
        }
    }

    return $sum;
}

echo BinToDec('1111');