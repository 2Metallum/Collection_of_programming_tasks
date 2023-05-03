<?php

/*
 * 3.18. Для данного x вычислить значение следующей
        функции f. f(x) = -1, если x <=0, f(x) = x,
        если 0 < x < 2, f(x) = x2, если x >= 2.
*/

function f($x) {
    if($x <= 0) {
        echo -1;
        return -1;
    } elseif($x > 0 && $x < 2) {
        echo $x;
        return $x;
    } else {
        echo 2*$x;
        return 2*$x;
    }
}

f(2);
f(-2);
f(1);