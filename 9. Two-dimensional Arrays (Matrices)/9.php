<?php

/*
 * 9.9. Дана целочисленная матрица размера MxN. Найти
        количество ее столбцов, все элементы которых
        различны.
*/

function foo($matrix) {
    $checkUnique = [];
    $uniqueColumns = 0;
    for ($i = 0; $i < count($matrix[0]); $i++) {
        for ($j = 0; $j < count($matrix); $j++) {
            $checkUnique[] = $matrix[$j][$i];
        }

        $unique = array_unique($checkUnique);
        if (count($unique) == count($checkUnique)) {
            $uniqueColumns++;
        }
        $checkUnique = [];
    }

    echo "Количество уникальных столбцов: " . $uniqueColumns . PHP_EOL;
}

foo([[1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
    [1, 3, 4, 5, 6, 7, 8, 9, 10, 10],
    [1, 4, 5, 6, 7, 8, 9, 10, 11, 10],
    [1, 5, 6, 7, 8, 9, 10, 11, 12, 10],
    [1, 6, 7, 8, 9, 10, 11, 12, 13, 10]]);