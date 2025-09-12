<?php

class Container
{
    protected $reboundCallbacks = [];

    public function onRebound($abstract, $callback)
    {
        $this->reboundCallbacks[$abstract][] = $callback;
    }

    public function rebound($abstract)
    {
        foreach ($this->reboundCallbacks[$abstract] ?? [] as $callback) {
            $callback(); // 执行回调
        }
    }
}

// 使用
$app = new Container();

$app->onRebound('logger', function () {
    echo "Logger 被重新绑定了1！\n";
});

$app->onRebound('logger', function () {
    echo "Logger 被重新绑定了2！\n";
});

$app->rebound('logger'); // 输出：Logger 被重新绑定了！


$my_map = array();
$my_map['test'] ?? $my_map['test'][] = "world";
print_r($my_map);

$book = array();
$book['title'][] = "java";
$book['title'][] = "php";
print_r($book);