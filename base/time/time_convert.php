<?php

// 当前时间戳
$timestamp = time();

// --------------------------
// 1. 当前时区（默认）下的时间
$localTime = date('Y-m-d H:i:s', $timestamp);
echo "当前默认时区时间: $localTime\n";

// --------------------------
// 2. 格式化为 UTC 时间
$dateUtc = new DateTime("@$timestamp"); // 用 @ 符号将时间戳传入
$dateUtc->setTimezone(new DateTimeZone('UTC'));
echo "UTC 时间: " . $dateUtc->format('Y-m-d H:i:s') . "\n";

// --------------------------
// 3. 格式化为 东八区（Asia/Shanghai）时间
$dateShanghai = new DateTime("@$timestamp");
$dateShanghai->setTimezone(new DateTimeZone('Asia/Shanghai'));
echo "东八区 (Asia/Shanghai) 时间: " . $dateShanghai->format('Y-m-d H:i:s') . "\n";


// 假设你有一个 UTC 时间字符串
$utcTimeStr = '2025-06-01 06:00:00'; // 假定这是 UTC 时间
$timestamp = strtotime($utcTimeStr); // 默认按当前 PHP 时区解析，但我们知道它是 UTC

// 转为 DateTime 并明确设置为 UTC 时区
$date = new DateTime($utcTimeStr, new DateTimeZone('UTC'));
$date->setTimezone(new DateTimeZone('Asia/Shanghai')); // 转为东八区
echo "UTC 时间 '$utcTimeStr' 对应的东八区时间是: " . $date->format('Y-m-d H:i:s') . "\n";


// 创建一个指定时区的当前时间
$dateShanghai = new DateTime('now', new DateTimeZone('Asia/Shanghai'));
echo "上海当前时间: " . $dateShanghai->format('Y-m-d H:i:s') . "\n";

$dateUtc = new DateTime('now', new DateTimeZone('UTC'));
echo "UTC 当前时间: " . $dateUtc->format('Y-m-d H:i:s') . "\n";
