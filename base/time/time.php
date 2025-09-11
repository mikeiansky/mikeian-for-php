<?php


// 【1】设置时区（可选，建议明确设置）
// date_default_timezone_set('Asia/Shanghai');
// date_default_timezone_set('UTC');

// 【2】输出当前系统时区
echo "当前 PHP 系统时区: " . date_default_timezone_get() . "\n\n";

// 【3】输出当前时间
echo "当前时间: " . date('Y-m-d H:i:s') . "\n\n";

// 【4】输出当前时间戳
$timestamp = time();
echo "当前时间戳: $timestamp\n\n";

// 【5】格式化当前时间戳为可读时间
echo "格式化后的当前时间: " . date('Y-m-d H:i:s', $timestamp) . "\n\n";

// 【6】将时间戳转为 UTC 和 上海时区时间
$dateUtc = new DateTime("@$timestamp");
$dateUtc->setTimezone(new DateTimeZone('UTC'));
echo "UTC 时间: " . $dateUtc->format('Y-m-d H:i:s') . "\n";

$dateShanghai = new DateTime("@$timestamp");
$dateShanghai->setTimezone(new DateTimeZone('Asia/Shanghai'));
echo "东八区 (Asia/Shanghai) 时间: " . $dateShanghai->format('Y-m-d H:i:s') . "\n\n";

// 【7】字符串时间转时区（比如 UTC 字符串转上海时间）
$utcTimeStr = '2025-06-01 06:00:00';
$date = new DateTime($utcTimeStr, new DateTimeZone('UTC'));
$date->setTimezone(new DateTimeZone('Asia/Shanghai'));
echo "UTC 时间 '$utcTimeStr' 对应的东八区时间: " . $date->format('Y-m-d H:i:s') . "\n";