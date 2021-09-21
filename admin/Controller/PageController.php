<?php

namespace Admin\Controller;


class PageController extends AdminController
{
    public function listing()
    {

       $pageModel = $this->load->model('Page');

        $data['pages'] = $pageModel->repository->getPages();

        $this->view->render('pages/list');
        
    }

   public function create()
    {

        $pageModel = $this->load->model('page');

        $this->view->render('pages/create');
    }
}