<?php
// 文件：app/Services/RealLogger.php

namespace App\Services {

    class RealLogger    {
        public function log($message)
        {
            echo "[LOG] " . $message . PHP_EOL;
        }
    }
}
// 文件：app/Facades/SimpleLoggerFacade.php

namespace App\Facades {



    class SimpleLoggerFacade{
        // 这个静态属性用于保存实际的服务对象（或者后面通过容器解析）
        protected static $resolvedInstance;

        // 模拟 Laravel 的 __callStatic 魔术方法
        public static function __callStatic($method, $arguments)
        {
            // 获取真正的服务对象
            $logger = self::getFacadeRoot();

            // 调用真正的 log 方法
            return $logger->$method(...$arguments);
        }

        // 模拟 Laravel 的解析逻辑：返回真正的服务对象
        protected static function getFacadeRoot()
        {
            if (!static::$resolvedInstance) {
                // 这里模拟从容器中解析 RealLogger，我们直接 new 一个
                static::$resolvedInstance = new \App\Services\RealLogger();
            }

            return static::$resolvedInstance;
        }
    }
}

namespace {
    // 引入我们自己的 Facade
    use App\Facades\SimpleLoggerFacade;

// 看起来像是静态调用
    SimpleLoggerFacade::log('Hello, Facade!');
}