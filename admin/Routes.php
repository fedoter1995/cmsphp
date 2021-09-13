<?php 

//Routes list
$this->router->add('login', '/admin/login', 'LoginController:form');
$this->router->add('admin-auth', '/admin/auth/', 'LoginController:authAdmin', 'POST');
$this->router->add('dashboard', '/admin', 'DashboardController:index');
