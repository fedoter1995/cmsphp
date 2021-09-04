<?php

namespace Engine\Service\Router;

use Engine\Service\AbstractProvider;
use Engine\Core\Router\Router;

class Provider extends AbstractProvider
{

    public $serviseName = 'router';

    public function init ()
    {
        $router = new Router('http://cmsphp');
        
        $this->di->set($this->serviceName, $router);
    }
}