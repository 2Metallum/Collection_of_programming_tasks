<?php

/*
 * 10.26. Дана строка, состоящая из русских слов, разделенных
        пробелами (одним или несколькими). Вывести строку,
        содержащую эти же слова (разделенные одним
        пробелом), но расположенные в алфавитном порядке.
*/

function foo($string) {
    $words = explode(" ", $string);
    sort($words);
    $string = join(" ", $words);

    echo $string;
}

foo('badfsadf abbaba uhsdf zlfjas terere');