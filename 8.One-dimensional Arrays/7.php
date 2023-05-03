<?php

/*
 * 8.7. Заменить все положительные элементы
        целочисленного массива размера 10 на значение
        минимального.
*/

function foo($arrOfNums) {
    $min_value = min($arrOfNums);

    for ($i = 0; $i < count($arrOfNums); $i++) {
        if($arrOfNums[$i] > 0) {
            $arrOfNums[$i] = $min_value;
        }
    }

    print_r($arrOfNums);
}

foo([-3, -2, -1, 0, 1, 2, 3, 4, 5]);