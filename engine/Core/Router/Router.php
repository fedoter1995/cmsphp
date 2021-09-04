<?php
namespace ENgine\Core\Router;

class Router
{
    private $routes =[];
    private $host;

    public function _construct($host)
    {
        $this->host = $host;
    }

    public function add($key, $pattern, $controller, $method = 'GET')
    {
        $this->routes[$key] = [
            
            'pattern'    => $pattern,
            'controller' => $controller,
            'method'     => $method,

        ];
    }

}