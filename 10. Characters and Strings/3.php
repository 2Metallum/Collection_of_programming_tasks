<?php

/*
 * 10.3. Дана строка. Вывести коды ее первого и последнего
        символа.
*/

function showCodeFirstLastChar($string) {
    $first_char = $string[0];
    $first_code = ord($first_char);
    $last_char = $string[strlen($string) - 1];
    $last_code = ord($last_char);

    echo "Код первого символа: " . $first_code . PHP_EOL;
    echo "Код последнего символа: " . $last_code;
}

showCodeFirstLastChar('San Jose');