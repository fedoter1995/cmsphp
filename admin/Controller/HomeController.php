<?php

namespace Admin\Controller;

class HomeController extends AdminController
{
    

    public function index()
    {   
        $data = ['name' => 'Fedor'];
        $this->view->render('index', $data);

    }

    public function news($id = '')
    {
        echo 'News Page' . $id;
    }

}