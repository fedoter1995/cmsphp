<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Engine\Cms;
use Engine\DI\DI;


try{
    //Dependency injection
    $di = new DI();

    require __DIR__ . '\Config\Service.php';
    // Init  service
    foreach($services as $service)
    {
        $provider = new $service($di);
        $provider->init();
        
    }

    $cms = new Cms($di);
    $cms->run();

}catch(\ErrorExeption $e)
{
    echo $e->getMessage();
}