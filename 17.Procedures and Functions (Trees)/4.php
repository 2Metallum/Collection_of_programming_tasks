<?php

/*
 * 17.4. Дано упорядоченное дерево глубины N (N > 0) того
        же типа, что и в предыдущем задании. Записать в
        текстовый файл с именем Name все пути от корня к
        листьям, удовлетворяющие следующему условию:
        суммарный вес элементов для любого начального
        отрезка пути неотрицателен. Каждый путь
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

    $node = new Node(rand(-10, 10));
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

    if (isLeaf($node) && isNonNegativePrefixSum($path)) {
        $pathString = implode(' ', $path) . PHP_EOL;

        file_put_contents($filename, $pathString, FILE_APPEND);
        return;
    }

    writePathsToFile($node->left, $path, $sum, $filename);
    writePathsToFile($node->right, $path, $sum, $filename);
}

function isNonNegativePrefixSum($arr) {
    $sum = 0;

    foreach ($arr as $val) {
        $sum += $val;

        if ($sum < 0) {
            return false;
        }
    }

    return true;
}

$depth = 4; // глубина дерева
$filename = 'Name.txt'; // имя файла для записи путей

// построение дерева
$tree = buildTree($depth);

// запись путей в файл
writePathsToFile($tree, [], 0, $filename);
