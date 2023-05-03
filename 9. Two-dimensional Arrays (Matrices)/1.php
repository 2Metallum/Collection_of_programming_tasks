<?php

/*
 * 9.1. Дано число k (0 < k < 11) и матрица размера 4x10.
        Найти сумму и произведение элементов k-го столбца
        данной матрицы.
*/

function foo($matrix, $k) {
    $sum = 0;
    for ($i = 0; $i < count($matrix); $i++) {
        $sum += $matrix[$i][$k-1];
    }

    echo $sum . PHP_EOL;
}

foo([[1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
    [2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
    [3, 4, 5, 6, 7, 8, 9, 10, 11, 12],
    [4, 5, 6, 7, 8, 9, 10, 11, 12, 13]], 1);