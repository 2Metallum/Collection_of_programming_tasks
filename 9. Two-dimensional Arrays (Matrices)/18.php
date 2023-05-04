<?php

/*
 * 9.18. Дана матрица размера 5x10. Вывести количество
        строк, элементы которых монотонно возрастают.
*/

function foo($matrix) {
    $count = 0;
    $isRaise = true;

    for ($i = 0; $i < count($matrix); $i++) {
        for ($j = 0; $j < count($matrix[$i]) - 1; $j++) {
            if ($matrix[$i][$j] >= $matrix[$i][$j+1]) {
                $isRaise = false;
                break;
            }
        }
        if($isRaise) {
            $count++;
            $isRaise = true;
        } else {
            $isRaise = true;
        }
    }

    echo "Количество строк элементы, которых монотонно возрастают: " . $count . PHP_EOL;
}

foo([[1, 2, 3, 4],
    [2, 3, 4, 5],
    [3, 4, 5, 6],
    [4, 5, 6, 7]]);