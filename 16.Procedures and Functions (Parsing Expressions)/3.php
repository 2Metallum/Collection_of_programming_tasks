<?php

/*
 * 16.3. Вывести значение целочисленного выражения,
        заданного в виде строки S. Выражение определяется
        следующим образом: <выражение> ::= <терм> |
        <выражение>+<терм> | <выражение>–<терм>
        <терм> ::= <элемент> | <терм>*<элемент>
        <элемент> ::= <цифра> | (<выражение>)
*/

function evaluate($expression) {
    // Разбиваем строку на токены
    preg_match_all("/\d+|\+|\-|\*|\(|\)/", $expression, $tokens);
    $tokens = $tokens[0];

    // Преобразуем токены в постфиксную запись
    $output = array();
    $operators = array();
    $precedence = array('+' => 1, '-' => 1, '*' => 2);

    foreach ($tokens as $token) {
        if (is_numeric($token)) {
            $output[] = $token;
        } elseif ($token == '(') {
            $operators[] = $token;
        } elseif ($token == ')') {
            while (($op = array_pop($operators)) != '(') {
                $output[] = $op;
            }
        } else {
            while (!empty($operators) && end($operators) != '(' &&
                $precedence[$token] <= $precedence[end($operators)]) {
                $output[] = array_pop($operators);
            }
            $operators[] = $token;
        }
    }
    while (!empty($operators)) {
        $output[] = array_pop($operators);
    }

    // Вычисляем значение выражения
    $stack = array();
    foreach ($output as $token) {
        if (is_numeric($token)) {
            $stack[] = $token;
        } else {
            $b = array_pop($stack);
            $a = array_pop($stack);
            switch ($token) {
                case '+':
                    $stack[] = $a + $b;
                    break;
                case '-':
                    $stack[] = $a - $b;
                    break;
                case '*':
                    $stack[] = $a * $b;
                    break;
            }
        }
    }
    return end($stack);
}

// Пример использования
$expression = '2*(3+4)-5';
$result = evaluate($expression);
echo "Результат вычисления выражения '{$expression}' равен {$result}";
