<?php


class MagicPerson
{
    private $data = [
        'name' => 'Alice',
        'age' => 25,
    ];

    // 当你访问一个不存在的属性时，比如 $p->name，会自动调用此方法
    public function __get($name)
    {
        echo "execute get $name".PHP_EOL;
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }

        // 你也可以在这里调用一个真正的方法，比如：
        // return $this->getName(); // 假如这是一个计算属性

        throw new Exception("Property {$name} does not exist.");
    }

    // 你也可以定义 __set() 来允许像属性一样赋值
    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }
}

$p = new MagicPerson();

// 像访问属性一样使用
echo $p->name.PHP_EOL; // 输出：Alice
echo $p->age.PHP_EOL;  // 输出：25

// 像设置属性一样使用
//$p->age = 30;
echo $p->age.PHP_EOL; // 输出：30

echo $p->name.PHP_EOL;
echo $p->age.PHP_EOL;
