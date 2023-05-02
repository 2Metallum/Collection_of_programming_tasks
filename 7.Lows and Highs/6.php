<?php

/*
 * 7.6. Найти [минимальный положительный] и
        [максимальный отрицательный] из данных десяти
        элементов. Если требуемые элементы отсутствуют, то
        вывести 0.
*/

function findMinMax($arrOfNums) {
    $positiveMin = PHP_INT_MAX;
    $negativeMax = PHP_INT_MIN;

    foreach ($arrOfNums as $key) {
        if($key < $positiveMin && $key > 0) {
            $positiveMin = $key;
        } elseif($key > $negativeMax && $key < 0) {
            $negativeMax = $key;
        }
    }

    echo "Positive Min: " . $positiveMin . PHP_EOL;
    echo "Negative Max: " . $negativeMax . PHP_EOL;
}

findMinMax([-5, -3, -1, 1, 3, 5]);