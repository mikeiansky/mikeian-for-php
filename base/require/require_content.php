<?php
//require "one.php";
//require "two.php";

$arr = [];

$arr['one'] = require 'one.php';
$arr['two'] = require 'two.php';

print_r($arr);
echo $one_tag.PHP_EOL;
echo $two_tag.PHP_EOL;