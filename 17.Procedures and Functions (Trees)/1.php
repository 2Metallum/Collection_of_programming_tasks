<?php
/*
 * 17.1. Дано упорядоченное дерево глубины N > 0, каждая
        внутренняя вершина которого имеет K (< 9)
        непосредственных потомков, которые нумеруются от 1
        до K. Корень дерева имеет номер 0. Записать в
        текстовый файл с именем Name все возможные пути,
        ведущие от корня к листьям (каждый путь
        записывается в отдельной строке файла). Перебирать
        пути, начиная с "самого левого" и заканчивая "самым
        правым", при этом первыми заменять конечные
        элементы пути.
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
        new Node(10, []),
        new Node(11, []),
        new Node(12, []),
    ]),
    new Node(2, [
        new Node(20, []),
        new Node(21, []),
    ]),
    new Node(3, [
        new Node(30, []),
        new Node(31, []),
        new Node(32, []),
    ]),
]);

function writeFileToPath($node, $path = [], $filename) {
    $path[] = strval($node -> $value);

    if(count($node -> $children) === 0) {
        $pathString = implode('-', $path) . '\n';
        file_put_contents($filename, $pathString, FILE_APPEND);
    }

    foreach ($node -> children as $child) {
        writeFileToPath($child, $path, $filename);
    }
}

file_put_contents('Name', '');
writeFileToPath($tree, [], 'Name');