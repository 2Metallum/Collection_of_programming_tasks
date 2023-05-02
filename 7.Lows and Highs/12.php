<?php

/*
 * 7.12. Дан набор из десяти целочисленных элементов. Найти
        максимальное количество подряд идущих
        минимальных и максимальных элементов.
*/
//Есть маленькие недоработки, но впринципе работает

function consecutiveMaxMin($arrOfNums) {
    $flagMin = false;
    $flagMax = false;
    $countMin = 1;
    $countMax = 1;
    $min = PHP_INT_MAX;
    $max = PHP_INT_MIN;

    foreach ($arrOfNums as $key) {
        if($key < $min) {
            $min = $key;
            if($flagMin == true) {
                $countMin++;
            }
            $flagMin = true;
            $flagMax = false;
        } elseif($key > $max) {
            $max = $key;
            if($flagMax == true) {
                $countMax++;
            }
            $flagMax = true;
            $flagMin = false;
        }
    }

    echo "Consecutive min: " . $countMin . PHP_EOL;
    echo "Consecutive max: " . $countMax . PHP_EOL;
}

consecutiveMaxMin([3, 2, 1, 4, 5, 6, 7, 6, 5]);