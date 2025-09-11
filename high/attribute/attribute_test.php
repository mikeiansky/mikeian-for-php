<?php

class AttributeCallable
{
    public function __construct(
//        public callable $getter; // ❌ 报错：不能将类属性声明为 callable 类型
//        public callable $setter;
        private mixed $getter = null,
        private mixed $setter = null
    ) {}

    /**
     * 创建一个新的 Attribute 实例（静态工厂方法）
     *
     * @param  callable|null  $get
     * @param  callable|null  $set
     * @return static
     */
    public static function make(callable $get2 = null, callable $set = null): static
    {
        return new static($get2, $set);
    }

    // 调用 getter（获取值时调用）
    public function get($value)
    {
        return $this->getter ? ($this->getter)($value) : $value;
    }

    // 调用 setter（设置值时调用）
    public function set($value)
    {
        return $this->setter ? ($this->setter)($value) : $value;
    }
}

// =============================
// 【你的测试代码，直接运行】
// =============================

// ✅ 使用命名参数调用 make()，只传 get，不传 set
$attr = AttributeCallable::make(get2: fn($value) => strtoupper($value));

// 原始值
$value = 'hello';

// 使用 getter 处理
echo "原始值: $value\n";
echo "经过 getter 处理后: " . $attr->get($value) . "\n";

// -------------------------------
// 再测试一个带 set 的例子
// -------------------------------

$attr2 = AttributeCallable::make(
    get2: fn($v) => "GET: $v",
    set: fn($v) => "SET: " . strtoupper($v)
);

$value2 = 'abc';

echo "原始值: $value2\n";
echo "getter 返回: " . $attr2->get($value2) . "\n";
echo "setter 返回: " . $attr2->set($value2) . "\n";