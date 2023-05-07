<?php

/*
 * 12.2. Описать функцию Min(A,N)1|Max(A,N)2 вещественного
        типа, находящую минимальный элемент массива A,
        состоящего из N вещественных чисел. С помощью этой
        функции найти минимальные элементы массивов A, B,
        C размера NA, NB, NC соответственно.
*/

function Min1($A, $N) {
    $min = PHP_INT_MAX;

    foreach ($A as $item) {
        if($item < $min) {
            $min = $item;
        }
    }

    return $min;
}

function Max1($A, $N) {
    $max = PHP_INT_MIN;

    foreach ($A as $item) {
        if($item > $max) {
            $max = $item;
        }
    }

    return $max;
}