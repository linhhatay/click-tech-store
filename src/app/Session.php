<?php

class Session
{
    protected static $instance;

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            session_start();
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function put($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public function get($key, $default = null)
    {
        return $_SESSION[$key] ?? $default;
    }

    public function has($key)
    {
        return isset($_SESSION[$key]);
    }

    public function remove($key)
    {
        unset($_SESSION[$key]);
    }

    public function all()
    {
        return $_SESSION;
    }

    public function destroy()
    {
        session_unset();
        session_destroy();
        self::$instance = null;
    }
}