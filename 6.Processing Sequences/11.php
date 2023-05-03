<?php

/*
 * 6.11. Дано целое число N и набор из N целых чисел.
        Вывести номера тех чисел в наборе, которые меньше
        своего левого соседа, и количество K таких чисел.
*/

function foo($k, $arrOfNums) {
    $count = 0;
    for ($i = 1; $i < count($arrOfNums); $i++) {
        if($arrOfNums[$i] < $arrOfNums[$i-1]) {
            $currentNum = $arrOfNums[$i];
            echo "$currentNum, ";
        }
    }
    echo "\nCount: $count" . PHP_EOL;
}