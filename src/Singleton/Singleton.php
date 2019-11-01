<?php

namespace DesignPattern\Singleton;

class Singleton
{
    private static $instance = null;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (!static::$instance) {
            return self::$instance = new self();
        }
        
        return self::$instance;
    }

    private function __clone()
    {
    }

    private function __sleep()
    {
    }

    private function __wakeup()
    {
    }
}
