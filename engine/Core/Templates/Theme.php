<?php

namespace Engine\Core\Templates;


class Theme
{
    /**
     * [RULES_NAME_FILE description]
     *
     * @var [type]
     */
    const RULES_NAME_FILE =[

        'header' => 'header-%s.php',
        'footer' => 'footer-%s.php',
        'sidebar' => 'sidebar-%s.php',
    ];

    /*
     * Theme url
     *  
     * @type str   
     */
    public $url = ' ';

    protected $data = [];



	public function getData() { 
        return $this->data; 
   } 

   public function setData($data) {  
       $this->data = $data; 
   } 

/*
 * [header description]
 *
 * @param   [type]  $name  [$name description]
 *
 * @return  [type]         [return description]
 */

    public function header($name = null)
    {
        $name = (string) $name;
        $emptyName = 'header';

        if($name != '')
        {
            $emptyName = sprintf(self::RULES_NAME_FILE['header'], $name);
        }

        $this->loadTemplateFile($emptyName);

    }
    
    
/*
 * [footer description]
 *
 * @param   [type]  $name  [$name description]
 *
 * @return  [type]         [return description]
 */


    public function footer($name = null)
    {
        $name = (string) $name;
        $emptyName = 'footer';

        if($name != '')
        {
            $emptyName = sprintf(self::RULES_NAME_FILE['footer'], $name);
        }

        $this->loadTemplateFile($emptyName);
        
    }
/**
 * [sidebar description]
 *
 * @param   [type]  $name  [$name description]
 *
 * @return  [type]         [return description]
 */

    public function sidebar($name = '')
    {
        $name = (string) $name;
        $emptyName = 'sidebar';

        if($name != '')
        {
            $emptyName = sprintf(self::RULES_NAME_FILE['sidebar'], $name);
        }

        $this->loadTemplateFile($emptyName);
        
    }


/**
 * [block description]
 *
 * @param   [type]  $name  [$name description]
 * @param   [type]  $data  [$data description]
 *
 * @return  []             [return description]
 */

    public function block($name = '', $data = [])
    {
        $name = (string) $name;
        

        if($name != '')
        {
            $this->loadTemplateFile($name);
        }

        
        
    }


/**
 * [loadTemplateFile description]
 *
 * @param   [type]  $nameFile  [$nameFile description]
 * @param   [type]  $data      [$data description]
 *
 * @return  []                 [return description]
 */

    private function loadTemplateFile($nameFile, $data = [])
    {
        
        $templateFile = ROOT_DIR . '/content/themes/default/' . $nameFile . '.php';

        if(is_file($templateFile))
        {
            extract($data);
            require_once $templateFile;
        }
        else
        {
            throw new \Exception(sprintf('View file %s does not exist', $templateFile));

        }

    }
     
}