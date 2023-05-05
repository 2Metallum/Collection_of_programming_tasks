<?php

/*
 * 10.28. Дана строка-предложение на русском языке.
        Подсчитать количество содержащихся в строке знаков
        препинания.
*/

function foo($string) {
    $punctuation_marks = array('.', ',', ';', '-', ':', '!', '?', '"', '\'');

    $string = str_split($string);
    $countMarks = 0;

    foreach ($string as $char) {
        if(in_array($char, $punctuation_marks)) {
            $countMarks++;
        }
    }

    echo $countMarks;
}

foo("дана строка-предложение на русском языке. Вот!");