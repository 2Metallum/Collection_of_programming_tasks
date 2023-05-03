<?php

/*
 * 6.12. Дано целое число N и набор из N целых чисел.
        Вывести номера тех чисел в наборе, которые больше
        своего правого соседа, и количество K таких чисел.
*/

function foo($arrOfNums) {
    $count = 0;
    for ($i = 0; $i < count($arrOfNums); $i++) {
        if($arrOfNums[$i] > $arrOfNums[$i+1]) {
            $currentNum = $arrOfNums[$i];
            echo "$currentNum, ";
        }
    }
    echo "\nCount: $count" . PHP_EOL;
}