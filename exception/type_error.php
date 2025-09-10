<?php

class SomeObject{}

$array = [];
$key = new SomeObject();  // 比如传入了一个对象、数组、资源等
$value = 123;

$array[$key] = $value;  // ❌ 非法！不能使用对象/数组等作为数组的键
