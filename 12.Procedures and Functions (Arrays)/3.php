<?php

/*
 * 12.3. Описать функцию NMax(A,N) целого типа, находящую
        номер максимального элемента массива A (массив
        состоит из N вещественных чисел). С помощью этой
        функции найти номера максимальных элементов
        массивов A, B, C размера NA, NB, NC соответственно.
*/

function NMax($A, $N) {
    $max = PHP_INT_MIN;
    $max_index = 0;

    foreach ($A as $key => $value) {
        if($value > $max) {
            $max = $value;
            $max_index = $key;
        }
    }

    return $max_index;
}

$NA = 5;
$NB = 7;
$NC = 4;
$A = [1, 2, 3, 4, 5];
$B = [6, 7, 8, 9, 10, 11, 12];
$C = [13, 14, 15, 16];
$NMaxA = NMax($A, $NA); // номер максимального элемента массива A
$NMaxB = NMax($B, $NB); // номер максимального элемента массива B
$NMaxC = NMax($C, $NC); // номер максимального элемента массива C

echo $NMaxA . PHP_EOL;
echo $NMaxB . PHP_EOL;
echo $NMaxC . PHP_EOL;