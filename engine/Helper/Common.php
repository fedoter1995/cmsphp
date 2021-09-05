<?php 

namespace Engine\Helper;


class Common
{

    public function ifPost()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            return true;
        }
        return false;
    }

    public static function getMethods()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public static function getPathUrl()
    {
        $pathUrl = $_SERVER['REQUEST_URI'];
        
        if($position = strpos($pathUrl, '?'))
        {
            $pathUrl = substr($pathUrl, 0 , $position);
        }
        
        return $pathUrl;
    }
}