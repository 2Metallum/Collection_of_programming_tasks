<?php

/*
 * 1.20. Дано целое четырехзначное число. Используя
        операции div и mod, найти произведение его цифр.
*/

function foo($number) {
    $digit4 = $number % 10;
    $digit3 = ($number / 10) % 10;
    $digit2 = ($number / 100) % 10;
    $digit1 = ($number / 1000) % 10;
    $result = $digit1 * $digit2 * $digit3 * $digit4;
    echo "Multiply of num digit: " . $result;
}