<?php


function createArrayRet() {
    return ["one", "two", "three"];
}


[$v1, $v2, $v3] = createArrayRet();
//[$v1, $v2, $v3, $v4] = createArrayRet();
echo "ret1 => $v1".PHP_EOL;
echo "ret2 => $v2".PHP_EOL;
echo "ret3 => $v3".PHP_EOL;