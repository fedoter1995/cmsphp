<?php

namespace Engine\Core\Templates;


use Engine\DI\DI;

class View
{

    public $di;
    protected $theme;

    public function __construct(DI $di)
    {
        $this->di = $di;
        $this->theme   = new Theme();
    }



    public function render($template, $data = [])
    {
        $templatePath = $this->getTemplatePath($template, ENV);

        if(!is_file($templatePath))
        {
            throw new \InvalidArgumentException(sprintf('Templates "%s" not found in "%s"',$template, $templatePath));
        }
        
        // Add language in this template
        $data['lang'] = $this->di->get('language');
       
        $this->theme->setData($data);
        

        extract($data);

        
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


    private function getTemplatePath($template, $env = null)
    {
        if($env == 'Cms')
        {
            return ROOT_DIR . '/content/themes/default/' . $template . '.php';
        }

        return ROOT_DIR . '/View/' . $template . '.php';
    }


}