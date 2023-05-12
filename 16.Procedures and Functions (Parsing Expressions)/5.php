<?php

/*
 * 16.5. Вывести значение логического выражения, заданного
        в виде строки S. Выражение определяется следующим
        образом ("T" — True, "F" — False): <выражение> ::= T
        | F | And(<операнды>) | Or(<операнды>)
        <операнды> ::= <выражение>,<выражение>
*/

function evaulate($expression) {
    $s = preg_replace('/\s+/', "", $expression);

    $true_regex = '/^T$/';
    if(preg_match($true_regex, $s)) {
        return true;
    }

    $false_regex = '/^F$/';
    if(preg_match($false_regex, $s)) {
        return false;
    }

    $and_regex = '/^And\((.*)\)$/';
    if(preg_match($and_regex, $s, $matches)) {
        $operands = explode(",", $matches[1]);

        foreach ($operands as $operand) {
            if(!evaulate($operand)) {
                return false;
            }
        }
        return true;
    }

    $or_regex = '/^Or\((.*)\)$/';
    if(preg_match($or_regex, $s, $matches)) {
        $operands = explode(",", $matches[1]);

        foreach ($operands as $operand) {
            if(evaulate($operand)) {
                return true;
            }
        }
        return false;
    }
}

$result = evaulate('And(T,Or(F,T),F)');
var_dump($result);