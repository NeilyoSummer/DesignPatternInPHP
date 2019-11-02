<?php

namespace DesignPattern\Singleton;

/**
 * Singleton 单例模式，创建型模式
 * 1. 单例模式的类只提供私有的构造函数
 * 2. 类定义中含有一个该类的静态私有对象
 * 3. 类提供了一个静态的公有的函数用于创建或获取它本身的静态私有对象
 * 4. private的clone方法，防止克隆
 * 5. 禁止序列化和反序列化
 */
class Singleton
{
    private static $instance = null;

    private function __construct()
    {
        // 要加载的相关语句.
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
