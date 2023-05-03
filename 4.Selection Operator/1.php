<?php

/*
 * 4.1. Дан номер месяца (1 — январь, 2 — февраль, ...).
        Вывести название соответствующего времени года
        ("зима", "весна" и т.д.).
*/

function foo($monthOfYear) {
    if($monthOfYear == 12 || $monthOfYear <= 2) {
        echo "Зима";
    } elseif($monthOfYear >= 3 && $monthOfYear <= 5) {
        echo 'Весна';
    } elseif($monthOfYear >= 6 && $monthOfYear <= 8) {
        echo 'Лето';
    } else {
        echo 'Осень';
    }
}
foo(12);
foo(5);
foo(8);