<?php

/*
 * 11.7. Описать процедуру SumDigit(N,S), находящую сумму
        цифр S целого числа N (N — входной, S — выходной
        параметр). Используя эту процедуру, найти суммы
        цифр пяти данных чисел.
*/

function SumDigit($N, &$S) {
    $digits = str_split($N);
    $digits = array_map('intval', $digits);
    $S = 0;
    foreach ($digits as $digit) {
        $S += $digit;
    }
}

$numbers = array(123, 456, 789, 101112, 131415);

foreach ($numbers as $n) {
    SumDigit($n, $s);
    echo "Сумма цифр числа $n равна $s\n";
}