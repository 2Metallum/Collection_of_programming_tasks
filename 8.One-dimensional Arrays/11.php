<?php

/*
 * 8.11. Проверить, образуют ли элементы целочисленного
        массива размера N арифметическую прогрессию. Если
        да, то вывести шаг прогрессии, если нет — вывести 0.
*/

function foo($arrOfNums) {
    $d = $arrOfNums[1] - $arrOfNums[0];
    for($i = 2; $i < count($arrOfNums); $i++) {
        if($arrOfNums[$i] - $d == $arrOfNums[$i-1]) {
            continue;
        } else {
            echo 0;
            return 0;
        }
    }

    echo $d . PHP_EOL;
}

foo([1, 3, 5, 7, 9]);