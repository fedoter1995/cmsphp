<?php

namespace Admin\Controller;


class PageController extends AdminController
{
    public function listing()
    {

       $pageModel = $this->load->model('Page');

        $data['pages'] = $pageModel->repository->getPages();

        $this->view->render('pages/list', $data);

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
        $pageModel = $this->load->model('page');

        if(isset($params['title'])) {
           $pageID = $pageModel->repository->createPage($params); 
           echo $pageID;
        }
        

        //print_r($params);
    }
}