<?php

/*
 * 9.6. Дана матрица размера 5x10. Найти минимальное
        значение среди сумм элементов всех ее столбцов и
        номер столбца с этим минимальным значением.
*/

function foo($matrix) {
    $sum = 0;
    $rowMin = PHP_INT_MAX;
    $currentColumn = 0;
    $row = 0;

    for ($i = 0; $i < count($matrix[$row]); $i++) {
        for ($j = 0; $j < count($matrix); $j++) {
            $sum += $matrix[$j][$i];
        }
        if($sum < $rowMin) {
            $rowMin = $sum;
            $currentColumn = $i;
        }
        $sum = 0;
        if(++$row == count($matrix)) {
            break;
        }
    }

    echo "Минимальное значение у колонны: " . $currentColumn . " = " . $rowMin;
}

foo([[1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
    [2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
    [3, 4, 5, 6, 7, 8, 9, 10, 11, 12],
    [4, 5, 6, 7, 8, 9, 10, 11, 12, 13],
    [5, 6, 7, 8, 9, 10, 11, 12, 13, 14]]);