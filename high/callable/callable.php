<?php


function useCallable(callable $uc1, callable $uc2) {
    $uc1();
    $uc2();
}


$hello = function() {
    echo "hello callable".PHP_EOL;
};

useCallable(uc1: $hello, uc2: $hello);
useCallable(uc2: $hello, uc1: $hello);