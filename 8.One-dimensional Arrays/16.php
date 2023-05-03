<?php

/*
 * 8.16. Дано вещественное число R и массив размера N.
        Найти два элемента массива, сумма которых наиболее
        близка к данному числу.
*/

function foo($r, $arrOfNums) {
    $sum = PHP_INT_MAX;
    $firstOne = 0;
    $secondOne = 0;

    for($i = 0; $i < count($arrOfNums) - 1; $i++) {
        for ($j = $i + 1; $j < count($arrOfNums); $j++){
            if(abs($arrOfNums[$i] + $arrOfNums[$j]) <= $r) {
                $sum = abs($arrOfNums[$i] + $arrOfNums[$j]);
                $firstOne = $arrOfNums[$i];
                $secondOne = $arrOfNums[$j];
            }
        }
    }

    echo "Самое близкие числа к R: " . $firstOne . ", " . $secondOne . PHP_EOL;
}

foo(4.6, [1, 2, 3, 4, 5, 6]);