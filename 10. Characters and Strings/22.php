<?php

/*
 * 10.22. Дана строка, состоящая из русских слов, разделенных
        пробелами (одним или несколькими). Определить
        количество слов, которые содержат ровно три буквы
        "А".
*/

function foo($string) {
    $str = $string;
    $str = preg_replace('/\s+/', " ", $str);

    $arrOfWords = explode(" ", $str);
    $count = 0;
    foreach ($arrOfWords as $k) {
        $countA = substr_count($k, 'A');
        if($countA == 3) {
            $count++;
        }
    }

    echo " количество слов, которые содержат ровно три буквы
        'А': " . $count . PHP_EOL;
}

foo('Ааа рабатА ораА');