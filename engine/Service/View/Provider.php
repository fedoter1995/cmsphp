<?php

namespace Engine\Service\View;

use Engine\Service\AbstractProvider;
use Engine\Core\Templates\View;

class Provider extends AbstractProvider
{

    public $serviceName = 'view';

    public function init ()
    {
        $view = new View($this->di);
        
        $this->di->set($this->serviceName, $view);
    }
}