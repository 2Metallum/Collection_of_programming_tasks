<?php

/*
 * 17.2. Дано упорядоченное дерево глубины N > 0, каждая
        внутренняя вершина которого имеет K (< 9)
        непосредственных потомков, которые нумеруются от 1
        до K. Корень дерева имеет номер 0. Записать в
        текстовый файл с именем Name все пути, ведущие от
        корня к листьям и удовлетворяющие следующему
        условию: никакие соседние элементы пути не
        нумеруются одной и той же цифрой. Каждый путь
        записывается в отдельной строке файла. Порядок
        перебора путей — тот же, что в задании Proc81.
*/

// Определяем класс узла дерева
class Node {
    public $value;
    public $children;

    public function __construct($value, $children) {
        $this->value = $value;
        $this->children = $children;
    }
}

// Создаем дерево
$tree = new Node(0, [
    new Node(1, [
        new Node(2, [
            new Node(4, []),
            new Node(5, []),
            new Node(6, []),
        ]),
        new Node(3, [
            new Node(4, []),
            new Node(5, []),
            new Node(6, []),
        ]),
    ]),
    new Node(2, [
        new Node(1, [
            new Node(3, []),
            new Node(5, []),
            new Node(7, []),
        ]),
        new Node(3, [
            new Node(1, []),
            new Node(5, []),
            new Node(7, []),
        ]),
    ]),
]);

// Рекурсивная функция для записи путей в файл
function writePathsToFile($node, $path = [], $filename) {
    if(!file_exists($filename)) return null;
    // Добавляем текущий узел в путь
    $path[] = strval($node->value);

    // Если узел является листом и путь удовлетворяет условию, записываем его в файл
    if (count($node->children) === 0 && isPathValid($path)) {
        $pathString = implode('-', $path) . "\n";
        file_put_contents($filename, $pathString, FILE_APPEND);
    }

    // Рекурсивно записываем пути для каждого потомка узла
    foreach ($node->children as $child) {
        writePathsToFile($child, $path, $filename);
    }
}

// Функция для проверки пути на соответствие условию
function isPathValid($path) {
    $lastDigit = null;

    foreach ($path as $digit) {
        if ($digit === $lastDigit) {
            return false;
        }

        $lastDigit = $digit;
    }

    return true;
}

// Очищаем файл перед записью
file_put_contents('Name', '');

// Запускаем запись путей в файл
writePathsToFile($tree, [], 'Name');
