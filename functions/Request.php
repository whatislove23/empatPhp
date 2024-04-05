<?php
class Request
{
    public static function post($key)
    {
        return isset($_POST[$key]) ? $_POST[$key] : null;
    }
    public static function get($key)
    {
        return isset($_GET[$key]) ? $_GET[$key] : null;
    }
    public static function request($key)
    {
        return isset($_REQUEST[$key]) ? $_REQUEST[$key] : null;
    }
}
