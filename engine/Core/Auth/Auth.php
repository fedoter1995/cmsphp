<?php

namespace Engine\Core\Auth;

use Engine\Helper\Cookie;

class Auth implements AuthInterface
{
    protected $authrized = false;
    protected $user_hash;

    public function authorized()
    {
        return $this->authorized;
    }

    public function hashUser()
    {
        return Cookie::get('authuser');
    }


    public function authorize($user)
    {
        Cookie::set('authauthorized', true);
        Cookie::set('authuser', $user);

    }

    public function unAuthorize()
    {
        Cookie::delete('authauthorized');
        Cookie::delete('authuser');

    }

    public static function salt()
    {
        return (string) rand(10000000, 99999999);
    }

    public static function encryptPassword($password, $salt = '')
    {
        return hash('sha256', $password . $salt);
    }
}