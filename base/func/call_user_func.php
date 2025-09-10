<?php

namespace Company\Xiaomi {
    function hirePerson($person) {
        echo "hire $person".PHP_EOL;
    }

}

namespace {

    function createApp($name) {
        echo "create app $name".PHP_EOL;
        return "app-$name";
    }


    $ret = call_user_func("createApp", "test");
    echo "create app ret:".$ret.PHP_EOL;

    call_user_func("Company\Xiaomi\hirePerson", "mike");

    class Person {
        var $name;

        function __construct($name)        {
            $this->name = $name;
        }

        function hello($msg) {
            echo "$this->name say hello $msg".PHP_EOL;
        }

        static function info() {
            echo "print person info".PHP_EOL;
        }

    }

    $person = new Person("mike");
    call_user_func([$person, "hello"], "ian");
    call_user_func(["Person", "info"]);

    function eat($food, $drink, $num) {
        echo "eat $food $drink $num".PHP_EOL;
    }
    // 刚刚好
    call_user_func("eat", "apple", "orange", 33);
    // 缺少参数
//    call_user_func("eat", "apple", "orange");
    // 有多余参数
    call_user_func("eat", "apple", "orange", 22, 11);
    // 刚刚好
    call_user_func_array("eat", ["apple", "orange", 45]);
    // 缺少参数
//    call_user_func_array("eat", ["apple", "orange"]);
    // 有多余参数
    call_user_func_array("eat", ["apple", "orange", 45, 66]);

}
