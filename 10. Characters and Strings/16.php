<?php

/*
 * 10.16. Даны строки S1, S2 и символ C. после каждого
        вхождения символа C в строку S1 вставить строку S2.
*/

function foo($s1, $s2, $c) {
    $pos = strpos($s1, $c);
    while ($pos !== false) {
        $s1 = substr_replace($s1, $s2, $pos+1, 0);
        $pos = strpos($s1, $c, $pos+strlen($s2)+1);
    }

    echo $s1;
}

foo('abcdabcdabcde', 'Ryan', 'a');