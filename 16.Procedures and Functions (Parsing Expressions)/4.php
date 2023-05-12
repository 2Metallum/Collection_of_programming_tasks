<?php

/*
 * 16.4. Вывести значение целочисленного выражения,
        заданного в виде строки S. Выражение определяется
        следующим образом: <выражение> ::= <цифра> |
        (<выражение><знак><выражение>) <знак> ::= + |
        – | *
*/

function evaulateExpression($S) {
    $s = preg_replace('/\s+/', $S);

    $digit_regex = '/^\d+$/';

    if(preg_match($digit_regex, $s)) {
        return intval($s);
    }

    $parentheses_regex = '/\(([^()]*)\)/';

    while(preg_match($parentheses_regex, $s, $matches)) {
        $result = evaulateExpression($matches[1]);

        $s = preg_replace($parentheses_regex, strval($result), $s, 1);
    }

    $operators_regex = '/^(\+|\-|\*)$/';

    preg_match($operators_regex, $s, $matches);
    $operator = $matches[1];

    $parts = preg_split($operators_regex, $s);

    $left = evaulateExpression($parts[0]);
    $right = evaulateExpression($parts[1]);

    if ($operator == '+') {
        return $left + $right;
    } elseif ($operator == '-') {
        return $left - $right;
    } elseif ($operator == '*') {
        return $left * $right;
    }
}

// Пример использования
$expression = '2*(3+4)-5';
$result = evaluate($expression);
echo "Результат вычисления выражения '{$expression}' равен {$result}";