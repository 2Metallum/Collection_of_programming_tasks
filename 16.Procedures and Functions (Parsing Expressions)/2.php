<?php

/*
 * 16.2. Вывести значение целочисленного выражения,
        заданного в виде строки S. Выражение определяется
        следующим образом: <выражение> ::= <терм> |
        <выражение>+<терм> | <выражение>–<терм>
        <терм> ::= <цифра> | <терм>*<цифра>
*/

function evaluateExpression($S) {
    $terms = preg_split('/[+-]/', $S);
    $result = 0;
    foreach ($terms as $term) {
        $factors = preg_split('/\\\\*/', $term);
        $value = 1;
        foreach ($factors as $factor) {
            $value *= intval($factor);
        }
        if(strpos($term, '-') !== false) {
            $value = -$value;
        }
        $result += $value;
    }

    return $result;
}