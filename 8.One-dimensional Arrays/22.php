<?php

/*
 * 8.22. Упорядочить массив размера N по убыванию.
*/

function foo($arrOfNums) {
    rsort($arrOfNums);
    print_r($arrOfNums);
}

foo([1,2,3,4,5,6,7,8]);