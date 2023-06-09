<?php

/*
 * 12.5. Описать процедуру Invert(A,N), меняющую порядок
        следования элементов массива A из N вещественных
        чисел на противоположный ("инвертирование
        массива"). Массив A — входной и выходной параметр,
        N — входной параметр. С помощью этой процедуры
        инвертировать массивы A, B, C размера NA, NB, NC
        соответственно.
*/

function Invert(&$A, $N) {
    $len = $N;
    for ($i = 0; $i < floor($N / 2); $i++) {
        $tmp = $A[$i];
        $A[$i] = $A[$len-1 - $i];
        $A[$len-1 - $i] = $tmp;
    }
}