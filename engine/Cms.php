<?php

namespace Engine;

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
        $this->router->add('home','', 'HomeController:index','GET');
        print_r($this->di);
    }

}