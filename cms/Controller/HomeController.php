<?php

namespace Cms\Controller;

class HomeController extends CmsController
{
    

    public function index()
    {   
        
        $this->view->render('homepage');
        var_export($this);
    }

   /* public function news($id = '')
    {
        echo 'News Page' . $id;
    }*/

}