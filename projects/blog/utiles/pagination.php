<?php
$books = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

for ($i = 11; $i < 21; $i++) {

    array_push($books, $i);
}

//规范格式
function myLogger($data)
{
    echo "<pre>";
    print_r($data);
    echo  "</pre>";
}
myLogger($books);

function getData($pageNumber, $books)
{
    $PAGE_SIZE = 3;
    $index = ($pageNumber - 1) * $PAGE_SIZE;
    $pages = array();
    for ($i = 0; $i < $PAGE_SIZE; $i++) {
        array_push($pages, $books[$index + $i]);
    }

    return $pages;
}

$returnPages = getData(2, $books);
myLogger($returnPages);
