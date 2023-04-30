<?php

/*
 * 2.9. Проверить истинность высказывания: "Сумма цифр
        данного трехзначного числа является четным числом".
*/

function sumOfDigits($number) {
    $digits = str_split($number);
    $digits = array_map('intval', $digits);
    $summ = array_sum($digits);

    echo $summ;
}