<?php
// MessageService.php
class MessageService {
    public function sendEmail($msg) { echo "Email: $msg\n"; }
    public function sendSMS($msg) { echo "SMS: $msg\n"; }
}

// NotificationFacade.php
class NotificationFacade {
    protected static $service;

    public static function init() {
        self::$service = new MessageService();
    }

    public static function sendEmail($msg) {
        return self::$service->sendEmail($msg);
    }

    public static function sendSMS($msg) {
        return self::$service->sendSMS($msg);
    }
}

// 使用
NotificationFacade::init();
NotificationFacade::sendEmail("Hello via Facade!");
NotificationFacade::sendSMS("Hi via Facade!");