<?php

/*
 * 6.13. Дано целое число N и набор из N вещественных
        чисел. Проверить, образует ли данный набор
        возрастающую последовательность. Если образует, то
        вывести True, если нет — вывести False
*/

function foo($arrOfNums) {
    for($i = 0; $i < count($arrOfNums); $i++) {
        if($i + 1 == count($arrOfNums)) continue;
        if($arrOfNums[$i] > $arrOfNums[$i + 1]) {
            echo 'False';
            return false;
        }
    }
    echo 'True';
    return true;
}