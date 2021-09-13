<?php

namespace Admin\Controller;

use Engine\Controller;
use Engine\DI\DI;
use Engine\Core\Auth\Auth;


class LoginController extends Controller
{
    protected $auth;

    public function __construct(DI $di)
    {
        parent::__construct($di);

        $this->auth = new Auth();
               
    }


    public function form()
    {
       
        $this->view->render('login');
       
    }


     public function authAdmin()
    {
        $params = $this->request->post;

        $query = $this->db->query('
            SELECT *
            FROM  `user` 
            WHERE email="' . $params['email'] . '"
            AND   password="' . md5($params['password']) . '"
            LIMIT 1
            ');
        print_r($query);exit;
        $this->auth->authorize('fedor');
        

    }
}