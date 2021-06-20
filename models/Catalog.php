<?php

namespace app\models;

class Catalog extends Model
{
    public $id;
    public $name;
    public $description;
    public $price;
    public $image;
    public $view;

    public function __construct($name = '', $description = '', $price = '', $image = '', $view = '')
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
        $this->view = $view;
    }

    protected function getTableName() {
        return 'catalog';
    }

}