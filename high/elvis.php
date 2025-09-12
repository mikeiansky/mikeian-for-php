<?php


function getResult($tag) {
//    $tag = "world";
    return $tag ?: "change result";
}

$a1 = 0;
$r1 = getResult($a1);
$r2 = getResult("world");
echo "r1 : $r1\n";
echo "r2 : $r2\n";
