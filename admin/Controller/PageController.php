<?php

namespace Admin\Controller;


class PageController extends AdminController
{
    public function listing()
    {

       $pageModel = $this->load->model('Page');

        $data['pages'] = $pageModel->repository->getPages();

        $this->view->render('pages/list');

        print_r($_POST);
        
    }

   public function create()
    {

        $pageModel = $this->load->model('page');

        $this->view->render('pages/create');
        
    }

    public function add()
    {
        $params = $this->request->post;

        print_r($params);
    }
}