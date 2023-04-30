<?php

/*
 * 2.12. Проверить истинность высказывания: "Все цифры
        данного трехзначного числа различны".
*/
//Предполагаю, что число 3х значное

function numIsContrasted($num) {
    $digits = str_split($num);
    $digits = array_map('intval', $digits);
    $uniqueDigits = array_unique($digits);
    if (count($uniqueDigits) == count($digits)) {
        echo 'True';
    } else {
        echo 'False';
    }
}