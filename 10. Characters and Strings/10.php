<?php

/*
 * 10.10. Дана строка, изображающая целое число. Вывести
        сумму цифр этого числа.
*/

function foo($string) {
    $digit = str_split($string);
    $digit = array_map('intval', $digit);
    $sumOfDigit = 0;

    foreach ($digit as $key) {
        $sumOfDigit += $key;
    }

    echo "Сумма цифр числа: " . $string . ' = ' . $sumOfDigit .  PHP_EOL;
}

foo('545');