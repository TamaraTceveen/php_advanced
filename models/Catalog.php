<?php

namespace app\models;

class Catalog extends DBModel
{
    protected $id;
    // became protected $id;
    protected $name;
    protected $description;
    protected $price;
    protected $image;
    protected $view;

    protected $props = [
        'name' => false,
        'description' => false,
        'price' => false,
        'image' => false,
        'view' => false 
    ];

    public function __construct($name = null, $description = null, $price = null, $image = null, $view = null)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
        $this->view = $view;
    }

    protected static function getTableName() {
        return 'catalog';
    }

}