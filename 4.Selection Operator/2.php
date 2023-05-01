<?php

/*
 * 4.2. Дан номер месяца (1 — январь, 2 — февраль, ...).
        Вывести число дней в этом месяце для невисокосного
        года.
*/

function foo($monthOfYear) {
    if($monthOfYear == 1 || $monthOfYear == 12 || $monthOfYear == 8 || $monthOfYear == 7) {
        echo '31 день';
    } elseif($monthOfYear % 2 == 1) {
        echo '31 день';
    } else {
        echo '30 дней';
    }
}

foo(1);
foo(3);
foo(12);
foo(7);