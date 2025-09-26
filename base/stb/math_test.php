<?php

$percentage = 0.5;
$amount = 20000;

$raw_ret = $percentage * 1000 * $amount / 100000;
$ret = ceil($percentage * 1000 * $amount / 100000);

echo $raw_ret.PHP_EOL;
echo $ret.PHP_EOL;
