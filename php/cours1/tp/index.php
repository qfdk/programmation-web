<?php

for($i=0;$i<10;$i++){
    echo $i;
}

$a1 = 1;
$b2 = 2;

function swap(&$a, &$b){
    $c = $a;
    $a = $b;
    $b = $c;
}
    echo "<br/>$a1 $b2";
    swap($a1, $b2);
    echo "<br/>$a1 $b2";
