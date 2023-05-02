<?php

/*
 * 8.3. Дан целочисленный массив A размера 10. Вывести
        номер первого из тех его элементов A[i], которые
        удовлетворяют двойному неравенству: A[1] < A[i] <
        A[10]. Если таких элементов нет, то вывести 0.
*/

function foo($arrOfNums) {
    for($i = 1; $i < $arrOfNums; $i++) {
        if($arrOfNums[$i] > $arrOfNums[0] && $arrOfNums[$i] < $arrOfNums[9]) {
            echo $arrOfNums[$i];
            return $arrOfNums[$i];
        }
    }
}

foo([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);