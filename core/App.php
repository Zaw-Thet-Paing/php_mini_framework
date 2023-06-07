<?php

class App
{
    private static $container = [];

    public static function bind($key, $value)
    {
        self::$container[$key] = $value;
    }

    public static function get($key)
    {
        return self::$container[$key];
    }

}