<?php

/*
 * 7.9. Найти номер первого экстремального (то есть
        минимального или максимального) из данных десяти
        целочисленных элементов.
*/

function foo($arrOfNums) {
    $min_index = PHP_INT_MAX;
    $max_index = PHP_INT_MIN;
    foreach ($arrOfNums as $key) {
        if($key < $min_index) {
            $min_index = $key;
        }
        if($key > $max_index) {
            $max_index = $key;
        }
    }

    if(array_search($min_index, $arrOfNums) < array_search($max_index, $arrOfNums)) {
        echo "Номер первого экстремального элемента: " . array_search($min_index, $arrOfNums);
    } else {
        echo "Номер первого экстремального элемента: " . array_search($max_index, $arrOfNums);
    }
}

foo([4, 3, 2, 5, 7, 1, 9]);