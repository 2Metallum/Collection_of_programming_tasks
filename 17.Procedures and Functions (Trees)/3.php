<?php

/*
 * 17.3. Дано упорядоченное дерево глубины N (N > 0 —
        четное), каждая внутренняя вершина которого имеет
        два непосредственных потомка: A с весом 1 и B с 
        весом –1. Корень дерева C имеет вес 0. Записать в
        текстовый файл с именем Name все пути от корня к
        листьям, удовлетворяющие следующему условию:
        суммарный вес элементов пути равен 0. Каждый путь
        записывается в отдельной строке файла.
*/

class Node {
    public $value;
    public $left;
    public $right;

    public function __construct($value) {
        $this->value = $value;
        $this->left = null;
        $this->right = null;
    }
}

function buildTree($depth) {
    if ($depth === 0) {
        return null;
    }

    $node = new Node(0);
    $node->left = buildTree($depth - 1);
    $node->right = buildTree($depth - 1);

    return $node;
}

function isLeaf($node) {
    return $node->left === null && $node->right === null;
}

function writePathsToFile($node, $path, $sum, $filename) {
    if ($node === null) {
        return;
    }

    $path[] = $node->value;
    $sum += $node->value;

    if (isLeaf($node) && $sum === 0) {
        $pathString = implode('', array_map(function($v) {
                return ($v === 1) ? 'A' : 'B';
            }, $path)) . PHP_EOL;

        file_put_contents($filename, $pathString, FILE_APPEND);
        return;
    }

    writePathsToFile($node->left, $path, $sum, $filename);
    writePathsToFile($node->right, $path, $sum, $filename);
}

$depth = 4; // глубина дерева
$filename = 'Name.txt'; // имя файла для записи путей

// построение дерева
$tree = buildTree($depth);

// запись путей в файл
writePathsToFile($tree, [], 0, $filename);
