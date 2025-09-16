<?php

class CallStatic {

    public static function __callStatic($name, $arguments) {
        foreach ($arguments as $argument) {
            echo "argument: $argument".PHP_EOL;
        }
        echo "execute get $name".PHP_EOL;
    }

    public static function hello() {
        echo "execute hello".PHP_EOL;
    }


}


callStatic::hello();
callStatic::changeMe("haha", "01", "03", "03");
