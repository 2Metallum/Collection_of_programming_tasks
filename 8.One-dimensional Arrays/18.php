<?php

/*
 * 8.18. Дан целочисленный массив размера N. Определить
        максимальное количество его одинаковых элементов
*/

function foo($arrOfNums) {
    $count = [];

    foreach ($arrOfNums as $value) {
        if(!isset($count[$value])) {
            $count[$value] = 1;
        } else {
            $count[$value]++;
        }
    }

    echo "Максимальное количество одинаковых элементов: " . max($count). PHP_EOL;
}

foo([1,1,1,1,1,4,4,4,4]);