<?php

use Engine\Cms;
use Engine\DI\DI;

try{
    //Dependency injection
    $di = new DI();

    $cms = new Cms($di);

    $cms->run();

}catch(\ErrorExeption $e)
{
    echo $e->getMessage();
}