<?php

namespace Engine\Core\Templates;

class View
{

    public function __construct()
    {

    }



    public function render($template, $vars = [])
    {
        $templatePath = ROOT_DIR . '/content/themes/default/' . $template . '.php';

        if(!is_file($templatePath))
        {
            throw new \InvalidArgumentException(sprintf('Templates "%s" not found in "%s"',$template, $templatePath));
        }
        extract($vars);
        ob_start();
        ob_implicit_flush(0);

        try
        {

            require $templatePath;

        }catch(\Exception $e){
        
            throw $e;
            ob_end_clean();
        }
        echo ob_get_clean();
    }
}