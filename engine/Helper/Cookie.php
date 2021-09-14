<?php

namespace Engine\Helper;

class Cookie 
{
    
    // Add cookie

    public static function set($key, $value, $time = 31536000)
    {

        setcookie($key, $value, time() + $time, '/');
    }
    //Get cookie by key
    public static function get($key)
    {
        return isset($_COOKIE[$key])?$_COOKIE[$key]:null;    
    }

    public static function delete($key)
    {
        if(isset($_COOKIE[$key]))
        {
            self::set($key,'',-31536000);
            unset($_COOKIE[$key]);
        }
    }

}