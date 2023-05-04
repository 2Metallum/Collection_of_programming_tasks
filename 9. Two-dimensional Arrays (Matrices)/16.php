<?php

/*
 * 9.16. Дана квадратная матрица порядка M. Зеркально
        отразить ее элементы относительно горизонтальной
        оси симметрии матрицы.
*/

function foo($matrix) {
    $newMatrix = [];
    $row = 0;
    for ($i = count($matrix) - 1; $i >= 0; $i++) {
        for($j = 0; $j < count($matrix[$i]); $j++) {
            $newMatrix[$row][$j] = $matrix[$i][$j];
        }
        $row++;
    }

    echo "Зеркально отраженная матрица: " . PHP_EOL;
    print_r($newMatrix) . PHP_EOL;
}

foo([[1, 2, 3, 4],
    [2, 3, 4, 5],
    [3, 4, 5, 6],
    [4, 5, 6, 7]]);