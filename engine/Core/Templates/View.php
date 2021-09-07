<?php

namespace Engine\Core\Templates;

use Engine\Core\Templates\Theme;

class View
{


    protected $theme;

    public function __construct()
    {
        $this->theme = new Theme();
    }



    public function render($template, $vars = [])
    {
        $templatePath = ROOT_DIR . '/content/themes/default/' . $template . '.php';

        if(!is_file($templatePath))
        {
            throw new \InvalidArgumentException(sprintf('Templates "%s" not found in "%s"',$template, $templatePath));
        }

        $this->theme->setData($vars);
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