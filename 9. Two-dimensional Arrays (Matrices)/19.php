<?php

/*
 * 9.19. Дана матрица размера 5x10. Найти максимальный
        среди элементов тех столбцов, которые упорядочены
        либо по возрастанию, либо по убыванию. Если такие
        столбцы отсутствуют, то вывести 0.
*/

function foo($matrix) {
    $isRaise = true;
    $isFall = true;
    $arrOfRaise = [];
    $arrOfFall = [];
    $maxOfMatrix = [];
    $column = 0;
    for ($i = 0; $i < count($matrix[$column]); $i++) {
        $arrOfRaise[] = $matrix[$i][0];
        $arrOfFall[] = $matrix[$i][0];
        for ($j = 0; $j < count($matrix) - 1; $j++) {
            if (($matrix[$j][$i] < $matrix[$j+1][$i]) && $isFall) {
                $isFall = false;
                $arrOfRaise[] = $matrix[$j+1][$i];
            }
            if (($matrix[$j][$i] > $matrix[$j+1][$i]) && $isRaise) {
                $isRaise = false;
                $arrOfFall[] = $matrix[$j+1][$i];
            }
        }
        if (count($arrOfRaise) == count($matrix)) {
            $maxOfMatrix[] = max[$arrOfRaise];
        } elseif (count($arrOfFall) == count($matrix)) {
            $maxOfMatrix[] = max[$arrOfRaise];
        }
        $column++;
        $isRaise = true;
        $isFall = true;
        $arrOfRaise = [];
        $arrOfFall = [];
        if($column == count($matrix)) {
            break;
        }
    }

    echo "Максимальное значение из упорядочнных столбцов: " . max($maxOfMatrix) . PHP_EOL;
}

foo([[1, 2, 3, 4],
    [2, 3, 4, 5],
    [3, 4, 5, 6],
    [4, 5, 6, 7]]);