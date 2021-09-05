<?php

namespace Engine;

use Engine\Helper\Common;
use Engine\Core\Router\DispatchedRoute;

class Cms 
{
    /*
     * @var DI
     */
    private $di;    

    public $router;
    /*
     * Cms construct
     * @param $di
     */
    public function __construct($di)
    {
        $this->di = $di;
        $this->router = $this->di->get('router');
    }
    
    /*
     * Run CMS
     */

    public function run()
    {  
        try
        {
            require_once __DIR__ . '/../cms/Routes.php';

            $routerDispatch = $this->router->dispatch(Common::getMethods(), Common::getPathUrl());
        
            if ($routerDispatch == null )
            {
                $routerDispatch = new DispatchedRoute('ErrorController:page404');
            }


        list($class, $action) = explode(':',$routerDispatch->getController(), 2);
        
        $controller = '\\Cms\\Controller\\'. $class;
        $parameters = $routerDispatch->getParameters();

        //print_r($parameters);
        
        call_user_func_array([new $controller($this->di), $action],$parameters);

        //print_r($class);
        //print_r($action);
        // print_r ($routerDispatch);
        }catch(\Exeption $e){

            echo $e->getMessage();
            exit;
        }
    }

}