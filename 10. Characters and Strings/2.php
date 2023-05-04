<?php

/*
 * 10.2. Дана строка. Вывести строку, содержащую те же
        символы, но расположенные в обратном порядке.
*/

function foo($string) {
    echo strrev($string);
}

foo('San Jose');