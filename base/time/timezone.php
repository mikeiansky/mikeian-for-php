<?php


date_default_timezone_set('Asia/Shanghai'); // 设为东八区
// 或
date_default_timezone_set('UTC'); // 设为 UTC

print_r(DateTimeZone::listIdentifiers());
// 或者去官方文档：https://www.php.net/manual/zh/timezones.php