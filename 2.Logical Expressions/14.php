<?php

/*
 * 2.14. Проверить истинность высказывания: "Цифры данного
        трехзначного числа образуют возрастающую или
        убывающую последовательность".
 * */

function foo($number) {
    $hasProgress = true;
    $hasRegress = true;

    $digits = str_split($number);
    $digits = array_map('intval', $digits);
    for ($i = 0; $i < count($digits) - 1; $i++) {
        if ($digits[$i] < $digits[$i+1] && $hasProgress) {
            $hasRegress = false;
        } elseif ($digits[$i] > $digits[$i+1] && $hasRegress) {
            $hasProgress = false;
        } else {
            echo 'False';
            return false;
        }
    }
    echo 'True';
    return true;
}
foo(137);
foo(961);
foo(188);