<?php

/*
 * 3.19. Дано целое число, лежащее в диапазоне от –999 до
        999. Вывести строку — словесное описание данного
        числа вида "отрицательное двузначное число",
        "нулевое число", "положительное однозначное число"
        и т.д.
*/

function numDescription($num) {
    $description = [];
    $countDigit = str_split(abs($num));
    $mayContinue = false;
    if($num < 0) {
        $description[] = 'отрицательное ';
        $mayContinue = true;
    } elseif($num > 0) {
        $description[] = 'положительное ';
        $mayContinue = true;
    } else {
        $description[] = 'нулевое число';
    }

    if($mayContinue) {
        if(count($countDigit) == 3) {
            $description[] = 'трехзначное число';
        } elseif(count($countDigit) == 2) {
            $description[] = 'двухзначное число';
        } else {
            $description[] = 'однозначное число';
        }
    }
    $result = implode('', $description);
    echo $result;
}
numDescription(-100);
numDescription(8);
numDescription(887);
