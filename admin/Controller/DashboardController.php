<?php

namespace Admin\Controller;

use Admin\Model\User\UserRepository;

class DashboardController extends AdminController
{

    public function index()
    {
        $userModel = $this->load->model('user');

        print_r($userModel->repository->getUsers());

        $this->view->render('dashboard');
    }
}