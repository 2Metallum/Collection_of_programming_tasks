<?php

/*
 * 10.22. Дана строка, состоящая из русских слов, разделенных
        пробелами (одним или несколькими). Определить
        количество слов, которые содержат ровно три буквы
        "А".
*/

function foo($string) {
    $words = explode(" ", $string);
    $count = 0;

    foreach ($words as $word) {
        $a_count = substr_count($word, "А");
        if ($a_count == 3) {
            $count++;
        }
    }

    print_r($count);
}

foo("ААА баба яга купила кота АААААА арбуз");