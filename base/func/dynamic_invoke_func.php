<?php
class Pipe
{
    public function handle($a, $b)
    {
        echo "调用 handle 方法，参数: $a, $b\n";
        return $a + $b;
    }

    public function run($x, $y)
    {
        echo "调用 run 方法，参数: $x, $y\n";
        return $x * $y;
    }
}

// 假设这是某个类中的代码逻辑
class Dispatcher
{
    protected $method = 'handle'; // 可以是 'handle' 或 'run'
//    protected $method = 'run'; // 可以是 'handle' 或 'run'
//    protected $method = 'run_no'; // 可以是 'handle' 或 'run'

    public function dispatch($pipe, $parameters)
    {
        // 动态判断并调用 $pipe 的方法
        if (method_exists($pipe, $this->method)) {
            return $pipe->{$this->method}(...$parameters);
        } else {
            // 如果方法不存在，尝试直接调用 $pipe（假设它是可调用的，比如 __invoke）
            return $pipe(...$parameters);
        }
    }
}

// 创建一个 Pipe 对象
$pipe = new Pipe();

// 创建 Dispatcher 对象
$dispatcher = new Dispatcher();

// 准备参数
$params = [10, 20];

$fall_func = function ($a, $b) {
  return $a + $b;
};

// 调用 dispatch，会使用 $this->method = 'handle'，调用 $pipe->handle(10, 20)
$result = $dispatcher->dispatch($pipe, $params);
$result = $dispatcher->dispatch($fall_func, $params);

echo "结果: $result\n";
