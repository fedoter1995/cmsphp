<?php

namespace Engine;

class Cms 
{
    /*
     * @var DI
     */
    private $di;
    /*
     * Cms construct
     * @param $di
     */
    public function __construct($di)
    {
        $this->di = $di;
    }

    /*
     * Run CMS
     */

    public function run()
    {
       print_r($this->di);
    }

}