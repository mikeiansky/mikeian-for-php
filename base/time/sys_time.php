<?php


echo "当前时间: " . date('Y-m-d H:i:s') . "\n";

echo "当前时间戳: " . time() . "\n";
$timestamp = time();
echo "当前时间戳: $timestamp\n";
echo "当前 PHP 系统时区: " . date_default_timezone_get() . "\n";

$timestamp = time(); // 当前时间戳
echo "格式化后的当前时间: " . date('Y-m-d H:i:s', $timestamp) . "\n";

$timeStr = '2025-06-01 14:00:00';
$timestamp = strtotime($timeStr);
echo "字符串 '{$timeStr}' 对应的时间戳是: $timestamp\n";