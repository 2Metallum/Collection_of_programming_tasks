<?php

/*
 * 2.16. Проверить истинность высказывания: "Цифры данного
        трехзначного числа образуют геометрическую
        прогрессию".
*/

function isGeometricProgression($number) {
    $digits = str_split($number);
    $digits = array_map('intval', $digits);

    if ($digits[1] / $digits[0] == $digits[2] / $digits[1]) {
        echo 'True';
        return true;
    }
    echo 'False';
    return false;
}

isGeometricProgression(248);
isGeometricProgression(139);
isGeometricProgression(258);