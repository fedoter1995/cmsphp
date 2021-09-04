<?php
namespace Engine\DI;

class DI
{
    /*  
     *  @var array
     */
    private $container = [];


    /* 
     * @param $key
     * @param $value
     * @return $this
     */
    public function set ($key, $value)
    {

        $this->container[$key] = $value;

        return $this;
    }

    /* 
     * @param $key
     * @return bool
     */
    public function has ($key)
    {
       return  isset($this->container[$key]) ? $this->container[$key] : null;
    }
    
    /* 
     * @param $key
     * @return $this
     */
    public function get ($key)
    {
        return $this->container[$key];
    }

}
