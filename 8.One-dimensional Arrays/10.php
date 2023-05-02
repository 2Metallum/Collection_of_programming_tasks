<?php

/*
 * 8.10. Дан массив размера N и число k (0 < k < 5, k < N).
        Осуществить циклический сдвиг элементов массива
        влево на k позиций.
*/

function foo($k, $arrOfNums) {
    for($i = 0; $i < $k; $i++) {
        $first_index = array_shift($arrOfNums);
        $arrOfNums[] = $first_index;
    }

    print_r($arrOfNums);
}

foo(3, [1, 2, 3, 4, 5, 6, 7, 8, 9]);