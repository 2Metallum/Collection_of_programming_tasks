<?php

/*
 * 8.9. Дан массив размера N. Осуществить циклический
        сдвиг элементов массива вправо на одну позицию.
*/

function foo($arrOfNums) {
    $last_element = array_pop($arrOfNums);
    array_unshift($arrOfNums, $last_element);

    print_r($arrOfNums);
}

foo([1, 2, 3, 4, 5, 6, 7]);