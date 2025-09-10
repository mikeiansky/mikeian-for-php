<?php

function useCopyArr($arr) {
    array_push($arr, "one", "two", "three");
}


$ra = ["java", "php", "python"];
print_r($ra);
echo "after user copy arr".PHP_EOL;
useCopyArr($ra);
print_r($ra);