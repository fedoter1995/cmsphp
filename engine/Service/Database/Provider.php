<?php

namespace Engine\Service\Database;

use Engine\Service\AbstractProvider;
use Engine\Core\Database\Connection;

class Provider extends AbstractProvider
{

    public $serviseName = 'db';

    public function init ()
    {
        $db = new Connection();
        $this->di->set($this->seviceName, $db);
    }
}