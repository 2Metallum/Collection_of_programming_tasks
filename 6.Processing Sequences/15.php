<?php

/*
 * 6.15. Дано целое число N и набор из N целых чисел,
        содержащий по крайней мере два нуля. Вывести
        сумму чисел из данного набора, расположенных
        между первыми двумя нулями (если первые нули идут
        подряд, то вывести 0).
*/

function foo($arrOfNums) {
    $sum = 0;
    $countNulls = 0;
    for($i = 0; $i < count($arrOfNums); $i++) {
        if($countNulls == 1) {
            $sum += $arrOfNums[$i];
        }
        if($arrOfNums[$i] == 0) {
            $countNulls++;
        }
        if($countNulls == 2) {
            break;
        }
    }

    echo $sum . PHP_EOL;
}

foo([12, 0, 1, 2, 3, 4, 0, 6, 7]);