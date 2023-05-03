<?php

/*
 * 8.15. Дано вещественное число R и массив размера N.
        Найти элемент массива, который наиболее близок к
        данному числу.
*/

function foo($r, $arrOfNums) {
    $different = PHP_INT_MAX;
    $current = $arrOfNums[0];

    foreach ($arrOfNums as $key => $value) {
        if(abs($value - $r) < $different) {
            $different = abs($value - $r);
            $current = $value;
        }
    }

    echo "Самое близкое число к R: " . $current . PHP_EOL;
}

foo(4.6, [1, 2, 3, 4, 5, 6]);