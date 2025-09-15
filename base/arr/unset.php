<?php

$a1 = array("java"=>11, "php"=>12, "python"=>13);

print_r($a1);

// delete 'java'
unset($a1['java']);

print_r($a1);

unset($a1['none']);

print_r($a1);
