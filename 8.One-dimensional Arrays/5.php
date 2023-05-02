<?php

/*
 * 8.5. Дан целочисленный массив размера N. Вывести
        вначале все его нечетные элементы, а затем —четные.
*/

function foo($arrOfNums) {
    echo "Нечетные числа: " . PHP_EOL;
    foreach ($arrOfNums as $key) {
        if($key % 2 == 1) {
            echo "$key, ";
        }
    }
    echo PHP_EOL . "Четные числа: " . PHP_EOL;
    foreach ($arrOfNums as $key) {
        if($key % 2 == 0) {
            echo "$key, ";
        }
    }
}

foo([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14]);