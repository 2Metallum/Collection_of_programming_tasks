<?php

/*
 * 8.17. Дан массив размера N. Найти номера двух ближайших
        чисел из этого массива.
*/

function foo($arrOfNums) {
    $different = PHP_INT_MAX;
    $firstOne = 0;
    $secondOne = 0;

    for($i = 0; $i < count($arrOfNums) - 1; $i++) {
        for ($j = $i + 1; $j < count($arrOfNums); $j++){
            if(abs($arrOfNums[$i] - $arrOfNums[$j]) < $different) {
                $different = abs($arrOfNums[$i] - $arrOfNums[$j]);
                $firstOne = $arrOfNums[$i];
                $secondOne = $arrOfNums[$j];
            }
        }
    }

    echo $different;
    echo "Индексы двух ближайших чисел: " . array_search($firstOne, $arrOfNums) . ", " . array_search($secondOne, $arrOfNums) . PHP_EOL;
}

foo([8, 10, 1, 2, 3, 4, 5, 6]);