<?php


/*
 * 6.3. Дано целое число N и набор из N ненулевых целых
        чисел. Вывести в том же порядке все четные числа из
        данного набора n K таких чисел.
*/

function foo($arrOfNums) {
    $count = 0;
    foreach ($arrOfNums AS $k) {
        if($k % 2 == 0) {
            echo $k . ", ";
            $count++;
        }
    }
    echo "\nK: $count";
}

foo([2, 3, 5, 6, 8, 9, 15]);