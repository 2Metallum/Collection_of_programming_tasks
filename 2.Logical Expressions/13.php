<?php

/*
 * 2.13. Проверить истинность высказывания: "Цифры данного
        трехзначного числа образуют возрастающую
        последовательность".
*/

function foo($number) {
    $digits = str_split($number);
    $digits = array_map('intval', $digits);

    for ($i = 0; $i < count($digits) - 1; $i++) {
        if ($digits[$i] >= $digits[$i+1]) {
            echo 'False';
            return false;
        }
    }
    echo 'True';
    return true;
}

foo(147);
foo(177);