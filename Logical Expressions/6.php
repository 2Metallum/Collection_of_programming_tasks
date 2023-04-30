<?php

/*
 * 2.6. Проверить истинность высказывания: "Данное целое
        число является нечетным трехзначным числом".
*/

function isOddTreeDigit($num) {
    $moreThanTen = (abs($num) / 10) > 0;
    $moreThanHundred = (abs($num) / 100) > 0;
    $lessThanThousand = (abs($num) / 1000) == 0;
    if($moreThanTen && $moreThanHundred && $lessThanThousand) {
        $isTrue = $num % 2 == 1 ? 'True' : 'False';
        echo $isTrue;
    } else {
        echo 'False';
    }
}