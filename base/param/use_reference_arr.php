<?php

function useReferenceArr(&$arr) {
    array_push($arr, "one", "two", "three");
}


$ra = ["java", "php", "python"];

print_r($ra);

echo "after user copy arr".PHP_EOL;

useReferenceArr($ra);

print_r($ra);