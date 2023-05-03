<?php

/*
 * 4.4. Дано целое число в диапазоне 1..5. Вывести строку —
        словесное описание соответствующей оценки (1 —
        "плохо", 2 — "неудовлетворительно", 3 —
        "удовлетворительно", 4 — "хорошо", 5 — "отлично").
*/

function foo($num) {
    switch ($num):
        case 1:
            echo 'плохо';
            break;
        case 2:
            echo 'неудовлетворительно';
            break;
        case 3:
            echo 'удовлетворительно';
            break;
        case 4:
            echo 'хорошо';
            break;
        case 5:
            echo 'отлично';
            break;
        default:
            echo 'Something wrong';
    endswitch;
}

foo(1);
foo(4);