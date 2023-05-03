<?php

/*
 * 2.15. Проверить истинность высказывания: "Цифры данного
        трехзначного числа образуют арифметическую
        прогрессию".
*/

function isArithmeticProgression($number) {
    $digits = str_split($number);
    $digits = array_map('intval', $digits);

    if($digits[1] - $digits[0] == $digits[2] - $digits[1]) {
        echo 'True';
        return true;
    }
    echo 'False';
    return false;
}

isArithmeticProgression(135);
isArithmeticProgression(147);
isArithmeticProgression(134);