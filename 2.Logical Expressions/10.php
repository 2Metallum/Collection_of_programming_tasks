<?php

/*
 * 2.10. Проверить истинность высказывания: "Сумма двух
        первых цифр данного четырехзначного числа равна
        сумме двух его последних цифр".
*/
//Насколько я понимаю: число 100% четырехзначное

function foo($num) {
    $digits = str_split($num);
    $digits = array_map('intval', $digits);
    $hasEqualPair = ($digits[0] + $digits[1]) == ($digits[2] + $digits[3]) ? 'True' : 'False';

    echo $hasEqualPair;
}