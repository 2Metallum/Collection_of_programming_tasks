<?php

/*
 * 2.5. Проверить истинность высказывания: "Данное целое
        число является четным двузначным числом".
*/

function isEvenTwoDigit($num) {
    $moreThanTen = (abs($num) / 10) > 0;
    $lessThanHundred = (abs($num) / 100) == 0;
    if($moreThanTen && $lessThanHundred) {
        $isTrue = $num % 2 == 0 ? 'True' : 'False';
        echo $isTrue;
    } else {
        echo 'False';
    }
}