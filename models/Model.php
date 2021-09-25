<?php

namespace app\models;

use app\interfaces\IModel;

abstract class Model implements IModel
{
    // вынести id

    protected $props = [];

    public function __set($name, $value) 
    {
        // TODO проверка поля по пропс. Существует и можно ли менять
        $this->props[$name] = true;
        $this->$name = $value;
    }

    public function __get($name) 
    {
        //TODO можно ли читать это поле
        return $this->$name;
    }

    public function __isset($name)
    {
        if (isset($this->props[$name])){
            return isset($this->$name);
        }
    }    
}