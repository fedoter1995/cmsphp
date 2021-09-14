<?php

namespace Admin\Controller;

use Engine\Controller;
use Engine\Core\Auth\Auth;

class AdminController extends Controller
{
    protected $auth;



    public function __construct($di)
    {
        parent::__construct($di);

        $this->auth = new Auth();

        $this->checkAuthorization(); 
        
        if($this->auth->hashUser() == null)
        {
            header ('Location: /admin/login/' );
        }
               
    }

    public function checkAuthorization()
    {

    
    }

    public function logout()
    {
        $this->auth->unAuthorize();

        //redirect
        header ('Location: /admin/login/' );
        exit;
    }

}