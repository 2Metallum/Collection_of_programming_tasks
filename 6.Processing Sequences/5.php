<?php

/*
 * 6.5. Даны целые числа K, N и набор из N целых чисел.
        Если в наборе присутствует число, меньшее K, то
        вывести True; в противном случае вывести False.
*/

function foo($k, $arrOfNums) {
    $flag = false;
    foreach ($arrOfNums AS $key) {
        if($key < $k) {
            $flag = true;
        }
    }

    echo $flag ? 'True' : 'False';
}

foo(4, [1, 2, 3]);