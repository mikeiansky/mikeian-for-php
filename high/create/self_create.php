<?php


class Foo
{
    public static function create_by_self()
    {
        return new self(); // 总是返回 Foo 的实例
    }

    public static function create_by_static() {
        return new static();
    }

}

class Bar extends Foo
{
}

$obj1 = Foo::create_by_self(); // Foo 的实例
$obj2 = Bar::create_by_self(); // 仍然是 Foo 的实例 ❌（不是 Bar）

echo get_class($obj1) . "\n"; // Foo
echo get_class($obj2) . "\n"; // Foo

$obj11 = Foo::create_by_static(); // Foo 的实例
$obj22 = Bar::create_by_static(); // 仍然是 Foo 的实例 ❌（不是 Bar）

echo get_class($obj11) . "\n"; // Foo
echo get_class($obj22) . "\n"; // Bar
