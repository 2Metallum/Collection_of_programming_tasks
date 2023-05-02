<?php

/*
 * 8.13. Дан массив размера N. Определить количество
        участков, на которых его элементы монотонно
        возрастают.
*/

function foo($arrOfNums) {
    $length = count($arrOfNums);
    $count = 0;
    for ($i = 0; $i < $length; $i++) {
        if($arrOfNums[$i] < $arrOfNums[$i+1]) {
            $j = $i + 1;

            while($j < $length - 1 && $arrOfNums[$j] < $arrOfNums[$j+1]) {
                $j++;
            }
            $count++;
            $i = $j;
        }
    }

    echo "Количество монотонно возрастающих участков: " . $count . PHP_EOL;
}

foo([1, 2, 3, 4, 5, 6, 5, 3, 4, 5]);