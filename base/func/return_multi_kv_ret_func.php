<?php

function createMultiKVRet() {
    return ["php"=> 15, "java" => 33, "python" => 67];
}

// require php 7.1+
["php"=> $v1, "java" => $v2, "python" => $v3] = createMultiKVRet();

echo "php => ".$v1.PHP_EOL;
echo "java => ".$v2.PHP_EOL;
echo "python => ".$v3.PHP_EOL;