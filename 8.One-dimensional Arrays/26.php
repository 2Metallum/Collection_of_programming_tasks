<?php

/*
 * 8.26. Дано множество A из N точек. Найти такую точку из
        данного множества, сумма расстояний от которой до
        остальных его точек минимальна, и саму эту сумму.
*/

function foo($arrOfNums) {
    $result = [];
    foreach ($arrOfNums as $key) {
        if(!isset($result[$key])) {
            $result[$key] = 1;
        } else {
            $result[$key]++;
        }
    }
    $result1 = [];
    foreach ($arrOfNums as $key) {
        if(!isset($result1[$key])) {
            $result1[$key] = 1;
        } else {
            $result1[$key]++;
        }
    }

    for ($i = 0; $i < count($arrOfNums); $i++) {
        $current = $arrOfNums[$i];

        for ($j = 0; $j < count($arrOfNums); $j++) {
            if($j == $i) {
                continue;
            }
            $result[$current] = abs(current - $arrOfNums[$j]);
            $result1[$current] += abs(current - $arrOfNums[$j]);
        }
    }

    echo "Точка расстояние от которой до остальных минимально: " . min($result) . PHP_EOL;
    echo "Сумма расстояний: " . min($result1) . PHP_EOL;
}

foo([2, 4, 5, 6, 7, 8, 10, 15]);