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

    protected function getTableName() {
        return 'catalog';
    }

}