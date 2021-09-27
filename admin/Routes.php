<?php 

//Routes list
$this->router->add('login', '/admin/login/', 'LoginController:form');
$this->router->add('admin-auth', '/admin/auth/', 'LoginController:authAdmin', 'POST');
$this->router->add('dashboard', '/admin/', 'DashboardController:index');
$this->router->add('logout', '/admin/logout/', 'AdminController:logout');


//GET Page Routes
$this->router->add('pages', '/admin/pages/', 'PageController:listing');
$this->router->add('pages-create', '/admin/pages/create/', 'PageController:create');
$this->router->add('pages-edit', '/admin/pages/edit/(id:int)', 'PageController:edit');
//POST Page Routes
$this->router->add('page-add', '/admin/page/add/', 'PageController:add', 'POST');
$this->router->add('page-update', '/admin/page/update/', 'PageController:update', 'POST');