<?php
function change()
{
    static $var = 0; // definit $var comme statique
    $var++;
    echo "change !!! " . $var;
}

function random()
{
    return mt_rand(1, 5);
}

function myLogger($data)
{
    echo "<pre>";
    var_dump($data);
    echo  "</pre>";
}