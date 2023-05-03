<?php

/*
 * 2.11. Проверить истинность высказывания: "Данное
        четырехзначное число читается одинаково слева
        направо и справа налево".
*/

function isPalindrome($num) {
    $digits = str_split($num);
    $digitsReverse = array_reverse($digits);
    for ($i = 0, $size = count($digits); $i < $size; $i++) {
        if($digits[$i] != $digitsReverse[$i]) {
            echo 'False';
            return false;
        }
    }
    echo 'True';
    return true;
}