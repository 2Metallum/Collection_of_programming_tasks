<?php

/*
 * 10.4. Дана строка. Подсчитать количество содержащихся в
        ней цифр.
*/

function findDigitInString($string) {
    $arrOfChars = str_split($string);
    $countDigit = 0;
    foreach ($arrOfChars as $key) {
        if (is_numeric($key)) {
            $countDigit++;
        }
    }

    echo "Кол-во чисел в строке: " . $countDigit . PHP_EOL;
}

findDigitInString('ab342sadfh8');