<?php

class App implements ArrayAccess {
    var $tag;

    private $data = []; // 用来存储像数组一样访问的键值数据，比如 config

    // 实现 ArrayAccess 接口的四个方法

    public function offsetExists($offset): bool {
        return isset($this->data[$offset]);
    }

    public function offsetGet($offset): mixed {
        return $this->data[$offset] ?? null;
    }

    public function offsetSet($offset, $value): void {
        $this->data[$offset] = $value;
    }

    public function offsetUnset($offset): void {
        unset($this->data[$offset]);
    }

    function useConfig() {
        $this['config'] = "hello config"; // ✅ 现在可以正常运行了！
    }
}

$app = new App();
$app->tag = "app";

$app->useConfig(); // 调用方法，设置 $this['config'] = 'hello config'

// 输出对象属性
echo $app->tag . PHP_EOL; // app

// 像数组一样访问
echo $app['config'] . PHP_EOL; // hello config