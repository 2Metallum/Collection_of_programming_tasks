<?php

/*
 * 10.25. Дана строка, состоящая из русских слов, разделенных
        пробелами (одним или несколькими). Вывести строку,
        содержащую эти же слова (разделенные одним
        пробелом), но расположенные в обратном порядке.
*/

function foo($string) {
    $words = explode(" ", $string);
    $words = array_reverse($words);
    $string = join(" ", $words);

    echo $string;
}

foo('akshf akjfh fhfhfh');