<?php

/*
 * 8.1. Дан массив размера N. Вывести его элементы в
        обратном порядке.
*/

function reverseArr($arrOfNums) {
    print_r(array_reverse($arrOfNums));
    return array_reverse($arrOfNums);
}

reverseArr([1, 2, 3, 4]);