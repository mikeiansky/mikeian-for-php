<?php

$list = ["one", "two", "three"];
print_r($list);
array_push($list, "four", "five");
print_r($list);

$map = ["java" => 11, "python" => 22, "php" => 33];
print_r($map);
$map['csharp'] = 66;
$map['golang'] = 77;
print_r($map);


echo count($list).PHP_EOL;
echo count($map).PHP_EOL;