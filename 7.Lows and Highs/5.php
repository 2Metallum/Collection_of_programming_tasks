<?php

/*
 * 7.5. Найти минимальный и максимальный четный и
        нечетный из данных десяти ненулевых целочисленных
        элементов. Если требуемые элементы отсутствуют, то
        вывести 0.
*/

function findMinMaxOddEven($arrOfNums) {
    $evenMin = PHP_INT_MAX;
    $evenMax = PHP_INT_MIN;
    $oddMin = PHP_INT_MAX;
    $oddMax = PHP_INT_MIN;

    foreach ($arrOfNums as $key) {
        if($key % 2 == 0) {
            if($key < $evenMin) {
                $evenMin = $key;
            }
            if($key > $evenMax) {
                $evenMax = $key;
            }
        } else {
            if($key < $oddMin) {
                $oddMin = $key;
            }
            if($key > $oddMax) {
                $oddMax = $key;
            }
        }
    }

    echo "Even Min: " . $evenMin . PHP_EOL;
    echo "Even Max: " . $evenMax . PHP_EOL;
    echo "Odd Min: " . $oddMin . PHP_EOL;
    echo "Odd Min: " . $oddMax . PHP_EOL;
}

findMinMaxOddEven([9, 8, 7, 6, 5, 4, 3, 2, 1, 0]);