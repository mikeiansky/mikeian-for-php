<?php

class Hello {

    var $name;

    function __construct($name) {
        $this->name = $name;
    }

    function __toString() {
        return $this->name;
    }

}

function dynamicArgFunc(Hello ...$args) {
    foreach ($args as $arg) {
        echo $arg.PHP_EOL;
    }
}


echo "invoke first time".PHP_EOL;
dynamicArgFunc(new Hello("i1"),new Hello("i2"));
echo "invoke second time".PHP_EOL;
dynamicArgFunc(new Hello("v1"),new Hello("v2"),new Hello("v3"));

