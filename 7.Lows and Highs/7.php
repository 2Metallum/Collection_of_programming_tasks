<?php

/*
 * 7.7. Даны числа a, b (0 < a < b) и набор из десяти
        элементов. Найти минимальный и максимальный из
        элементов, содержащихся в интервале (a, b). Если
        требуемые элементы отсутствуют, то вывести –1.
*/

function findMinMaxInInterval($a, $b, $arrOfNums) {
    $minInInterval = PHP_INT_MAX;
    $maxInInterval = PHP_INT_MIN;
    foreach ($arrOfNums as $key) {
        if($key > $a && $key < $b) {
            if($key < $minInInterval) {
                $minInInterval = $key;
            }
            if($key > $maxInInterval) {
                $maxInInterval = $key;
            }
        }
    }

    echo "Min in interval: " . $minInInterval . PHP_EOL;
    echo "Max in interval: " . $maxInInterval . PHP_EOL;
}

findMinMaxInInterval(4, 7, [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);