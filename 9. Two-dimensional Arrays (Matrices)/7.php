<?php

/*
 * 9.7. Дана матрица размера 5x10. Вывести номер ее первой
        строки, содержащей только положительные элементы.
        Если таких строк нет, то вывести 0.
*/

function showPositiveRow($matrix) {
    $rowPositive = true;
    for ($i = 0; $i < count($matrix); $i++) {
        foreach ($matrix[$i] as $key) {
            if($key != abs($key)) {
                $rowPositive = false;
                break;
            }
        }
        if ($rowPositive == true) {
            echo "Первая строка, содержащая только положительные элементы: " . ($i+1) . PHP_EOL;
            return ($i+1);
        }
    }
    echo 0;
    return 0;
}

showPositiveRow([[1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
    [2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
    [3, 4, 5, 6, 7, 8, 9, 10, 11, 12],
    [4, 5, 6, 7, 8, 9, 10, 11, 12, 13],
    [5, 6, 7, 8, 9, 10, 11, 12, 13, 14]]);