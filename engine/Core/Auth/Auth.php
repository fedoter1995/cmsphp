<?php

namespace Engine\Core\Auth;

use Engine\Helper\Cookie;

class Auth implements AuthInterface
{
    protected $authrized = false;
    protected $user;

    public function authorized()
    {
        return $this->authorized;
    }

    public function user()
    {
        return $this->user;
    }


    public function authorize($user)
    {
        Cookie::set('authauthorized', true);
        Cookie::set('authuser', $user);

        $this->authorized = true;
        $this->user       = $user;

    }

    public function unAuthorize($user)
    {
        Cookie::delete('authauthorized');
        Cookie::delete('authuser');

        $this->authorized = false;
        $this->user       = null;

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