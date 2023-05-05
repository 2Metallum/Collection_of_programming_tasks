<?php

/*
 * 10.14. Даны две строки: S1 и S2. Определить количество
        вхождений строки S2 в строку S1.
*/

function foo($s1, $s2) {
    $count = 0;
    $isSub = true;
    $startWith = 0;
    while($isSub) {
        $isSub = strpos($s1, $s2, $startWith);
        if(is_numeric($isSub)) {
            $count++;
            $startWith = $isSub + 1;
        } elseif (!$isSub) {
            break;
        }
        $isSub = true;
    }

    echo "Количество вхождений второй строки в первую: " . $count . PHP_EOL;
}

foo('abcdabcdabcde', 'a');
