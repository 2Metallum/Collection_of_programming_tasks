<?php

/*
 * 10.21. Дана строка, состоящая из русских слов, разделенных
        пробелами (одним или несколькими). Определить
        количество слов, которые начинаются и
        заканчиваются одной и той же буквой.
*/

function foo($string) {
    $str = $string;
    $str = preg_replace('/\s+/', ' ', $str);

    $arrOfWords = explode(" ", $str);
    $count = 0;
    foreach ($arrOfWords as $k) {
        $chars = str_split($k);
        $length = count($chars) - 1;
        if($chars[0] == $chars[$length]) {
            $count++;
        }
    }

    echo "Количество слов начинающихся с одной и той же буквы: " . $count . PHP_EOL;
}

foo('Ryan   Collins     JiJ');