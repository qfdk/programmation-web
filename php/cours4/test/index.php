<?php
// key = value

function myLogger($data)
{
    echo "<pre>";
    print_r($data);
    echo  "</pre>";
}

setcookie("test", "test 下面", 0, "/test");

myLogger($_COOKIE);
