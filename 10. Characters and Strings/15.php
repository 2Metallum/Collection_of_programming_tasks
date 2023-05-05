<?php

/*
 * 10.15. Дана строка S и символ C. Удвоить каждое вхождение
        символа C в строку S.
*/

function foo($string, $c) {
    $count = 0;
    $isSub = true;
    $startWith = 0;
    $newString = '';
    while($isSub) {
        $isSub = strpos($string, $c, $startWith);
        if(is_numeric($isSub)) {
            $count++;
            $startWith = $isSub + 1;
        } elseif (!$isSub) {
            break;
        }
        $isSub = true;
    }
    while($count > 0) {
        $newString = $newString . $c;
        $count--;
    }

    echo $string . $newString;
}

foo('abcdabcdabcde', 'a');