<?php

/*
 * 8.24. Дана точка A и множество B из N точек. Найти номер
        точки из множества B, наиболее близкой к точке A.
*/

function foo($set, $a) {
    $different = PHP_INT_MAX;
    $current = 0;
    array_unique($set);
    foreach ($set as $key) {
        if(abs($key - $a) < $different) {
            $different = abs($key - $a);
            $current = $key;
        }
    }

    echo array_search($current, $set);
}

foo([4, 4, 3, 2 , 1], 2.6);