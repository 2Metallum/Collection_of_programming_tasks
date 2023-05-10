<?php

/*
 * 12.8. Описать процедуру SortInc(A,N), выполняющую
        сортировку по возрастанию массива A из N
        вещественных чисел. Массив A является входным и
        выходным параметром. С помощью этой процедуры
        отсортировать массивы A, B, C размера NA, NB, NC
        соответственно.
*/

function SortInc(&$A, $N) {
    $min_index = 0;
    $min = PHP_INT_MAX;
    for ($i = 0; $i < $N; $i++) {
        for ($j = $i; $j < $N; $j++) {
            if($min > $A[$j]) {
                $min = $A[$j];
                $min_index = $j;
            }
        }
        $tmp = $A[$i];
        $A[$i] = $min;
        $A[$min_index] = $tmp;

        $min_index = 0;
        $min = PHP_INT_MAX;
    }
}

$arr = [4, 3, 10, 23, -100, 2, 1];
SortInc($arr, count($arr));
print_r($arr);