<?php

namespace app\models;

class Image extends Model
{
    public $id;
    public $name;
    public $likes;

    public function __construct($name = null, $likes = null)
    {
        $this->name = $name;
        $this->likes = $likes;
    }

    protected function getTableName() {
        return 'images';
    }

}