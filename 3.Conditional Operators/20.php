<?php

/*
 * 3.20. Дано целое число, лежащее в диапазоне от 1 до 9999.
        Вывести строку — словесное описание данного числа
        вида "четное двузначное число", "нечетное
        четырехзначное число" и т.д.
*/

function numDescription($num) {
    $description = [];
    $countDigit = str_split($num);
    if($num % 2 == 0) {
        $description[] = 'четное';
    } else {
        $description[] = 'нечетное';
    }

    if(count($countDigit) == 4) {
        $description[] = 'четырехзначное число';
    } elseif(count($countDigit) == 3) {
        $description[] = 'трехзначное число';
    } elseif(count($countDigit) == 2) {
        $description[] = 'двухзначное число';
    } else {
        $description[] = 'однозначное число';
    }
    $result = implode(' ', $description);
    echo $result;
}

numDescription(8888);
numDescription(777);
numDescription(64);