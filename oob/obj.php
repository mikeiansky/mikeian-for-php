<?php

class Obj
{

    function info()
    {
        echo "hello obj info" . PHP_EOL;
    }

}

$obj = new Obj();
$obj->info();


$ov = "Obj";
$o2 = new $ov();
$o2->info();