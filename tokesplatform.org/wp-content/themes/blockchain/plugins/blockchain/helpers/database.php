<?php

/**
 * Created by IntelliJ IDEA.
 * User: user
 * Date: 12/28/16
 * Time: 5:17 PM
 */
class DatabaseHelper
{
    private static $instance;

    /**
     * @return wpdb
     */
    public static function getInstance()
    {
        return static::$instance;
    }

    /**
     * @param mixed $instance
     */
    public static function setInstance(wpdb $instance)
    {
        static::$instance = $instance;
    }
}