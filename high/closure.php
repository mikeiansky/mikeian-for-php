<?php

namespace App {

    class Person {

        function info()
        {
            return "person info";
        }

    }

    $name = "apple";
    $p = new Person();

    $gn = function () use ($p) {
        return $p;
    };

    function createGetName()
    {
        global $gn;
        return $gn;
    }

}

namespace {
    $hello = function ($msg) {
        return "hello ".$msg;
    };
// can debug
    echo $hello("world").PHP_EOL;

    class FuncClass {

        public static $sv = "static value";
        const cv = "constant value";

        var $tag = "func class";

        static function staticValue()
        {
            return function () {
                return self::$sv;
            };
        }

        static function constantValue() {
            return function () {
                return self::cv;
            };
        }

        static function func1() {
            return function () {
                return "func1";
            };
        }

        function objFunc() {
            return function (){
                return "objFunc";
            };
        }

        function thisFunc() {
            return function (){
                return $this->tag;
            };
        }

    }

    function func2() {
        return function () {
            return "func2";
        };
    }

    echo FuncClass::$sv.PHP_EOL;

    $scf = FuncClass::func1();
    echo $scf().PHP_EOL;

    $fo = new FuncClass();
    $fcf = $fo->objFunc();
    echo $fcf().PHP_EOL;

    $tcf = $fo->thisFunc();
    echo $tcf().PHP_EOL;

    $sf = func2();
    echo $sf().PHP_EOL;


// 3. 带 use 的闭包
    $value = 123;
    $c = function () use ($value) { return $value; };
    echo $c().PHP_EOL;

    $svf = FuncClass::staticValue();
    echo $svf().PHP_EOL;

    $cvf = FuncClass::constantValue();
    echo $cvf().PHP_EOL;

    $gnf = App\createGetName();
    echo $gnf()->info().PHP_EOL;

}
