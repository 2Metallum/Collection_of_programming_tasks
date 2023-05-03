<?php

/*
 * 9.5. Дана матрица размера 5x10. Преобразовать матрицу,
        поменяв местами минимальный и максимальный
        элемент в каждой строке.
*/

function foo($matrix) {
    for ($i = 0; $i < count($matrix); $i++) {
        $min = min($matrix[$i]);
        $max = max($matrix[$i]);
        $min_index = array_search($min, $matrix[$i]);
        $max_index = array_search($max, $matrix[$i]);

        $matrix[$i][$min_index] = $max;
        $matrix[$i][$max_index] = $min;
        }
}

foo([[1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
    [2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
    [3, 4, 5, 6, 7, 8, 9, 10, 11, 12],
    [4, 5, 6, 7, 8, 9, 10, 11, 12, 13],
    [5, 6, 7, 8, 9, 10, 11, 12, 13, 14]]);