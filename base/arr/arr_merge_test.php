<?php


$array1 = [1, 2, 3, 4];
$array2 = [4, 5, 6];

$result = array_merge($array1, $array2);

print_r($result);


$ar1 = ["one" => 1, "two" => 2, "three" => 3];
$ar2 = ["one" => 1, "two-2" => 2, "three-3" => 3];
$result = array_merge($ar1, $ar2);
print_r($result);
