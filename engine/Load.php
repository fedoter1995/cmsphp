<?php

namespace Engine;

use Engine\DI\DI;

class Load
{
    const MASK_MODEL_ENTITY     = '\%s\Model\%s\%s';
    const MASK_MODEL_REPOSITORY = '\%s\Model\%s\%sRepository';

    const FILE_MASK_LANGUAGE    = 'Language/%s/%s.ini';

    /**
     * @var \Engine\DI\DI
     */
    public $di;

    public function __construct(DI $di)
    {
        $this->di = $di;

        return $this;
    }

    /**
     * param $modelName
     * param bool $modelDir
     * param bool $env
     * return bool
     */
   
    public function model($modelName, $modelDir = false, $env = false)
    {
        $modelName  = ucfirst($modelName);
        $modelDir   = $modelDir ? $modelDir : $modelName;
        $env        = $env ? $env : ENV;

        $namespaceModel = sprintf(
            self::MASK_MODEL_REPOSITORY,
            $env, $modelDir, $modelName
        );

        $isClassModel = class_exists($namespaceModel);

        if ($isClassModel) {
            // Set to DI
            $modelRegistry = $this->di->get('model') ?: new \stdClass();
            $modelRegistry->{lcfirst($modelName)} = new $namespaceModel($this->di);
            //print_r($this->di->set('model', $modelRegistry));
            $this->di->set('model', $modelRegistry);
        }

        return $isClassModel;
    }
}