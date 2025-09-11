<?php


class Simple
{
    public static function make()
    {
        return new static(); // 最简 new static() 用法
    }

    function hello() {
        echo "Hello I am simple".PHP_EOL;
    }

}

$obj = Simple::make();
echo get_class($obj).PHP_EOL; // 输出：Simple
$obj->hello();
