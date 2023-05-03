<?php

/*
 * 8.19. Дан целочисленный массив размера N. Если он
        является перестановкой, то есть содержит все числа
        от 1 до N, то вывести 0, в противном случае вывести
        номер первого недопустимого элемента.
*/

function foo($arrOfNums) {
    $length = count($arrOfNums);
    for ($i = 0; $i < count($arrOfNums); $i++) {
        if($arrOfNums[$i] < 1 || $arrOfNums[$i] > $length) {
            echo $arrOfNums[$i];
            break;
        } elseif (array_search($arrOfNums[$i], $arrOfNums) !== $i) {
            echo $arrOfNums[$i];
            break;
        } elseif($i == $length - 1) {
            echo "0";
            break;
        }
    }
}

foo([3,2,1]);