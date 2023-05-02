<?php

/*
 * 8.12. Дан массив размера N. Найти количество его
        минимумов.
*/

function foo($arrOfNums) {
    $countMinEl = 0;
    for ($i = 0; $i < count($arrOfNums) - 1; $i++) {
        if($arrOfNums[$i+1] < $arrOfNums[$i]) {
            $countMinEl++;
        }
    }

    echo "Кол-во минимумов массива: " . $countMinEl . PHP_EOL;
}

foo([1, 3, 2, 4 ,5, 4, 3]);