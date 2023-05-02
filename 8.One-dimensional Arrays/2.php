<?php

/*
 * 8.2. Дан массив размера N. Вывести вначале его элементы
        с четными индексами, а затем — с нечетными.
*/

function showArr($arrOfNums) {
    $arrEven = [];
    $arrOdd = [];
    for($i = 0; $i < count($arrOfNums); $i++) {
        if($arrOfNums[$i] % 2 == 0) {
            $arrEven[] = $arrOfNums[$i];
        } else {
            $arrOdd[] = $arrOfNums[$i];
        }
    }

    echo "Even values: " . PHP_EOL;
    print_r($arrEven);
    echo "Odd values: " . PHP_EOL;
    print_r($arrOdd);
}

showArr([1, 2, 3, 4, 5, 6, 7, 8]);