<?php

/*
 * 8.20. Дан целочисленный массив размера N. Назовем
        серией группу подряд идущих одинаковых элементов,
        а длиной серии — количество этих элементов (длина
        серии может быть равна 1). Вывести массив,
        содержащий длины всех серий исходного массива.
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

    print_r($count);
}

foo([1,1,1,1,1,4,4,4,4]);