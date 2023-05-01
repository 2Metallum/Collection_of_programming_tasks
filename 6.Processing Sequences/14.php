<?php

/*
 * 6.14. Дано целое число N и набор из N вещественных
        чисел. Если данный набор образует убывающую
        последовательность, то вывести 0; в противном
        случае вывести номер первого числа, нарушающего
        закономерность.
*/

function foo($arrOfNums) {
    for($i = 0; $i < count($arrOfNums); $i++) {
        if($i + 1 == count($arrOfNums)) continue;
        if($arrOfNums[$i] < $arrOfNums[$i + 1]) {
            echo $arrOfNums[$i + 1];
            return $arrOfNums[$i + 1];
        }
    }
    echo 0;
    return 0;
}

foo([1, 2, 3, 4]);