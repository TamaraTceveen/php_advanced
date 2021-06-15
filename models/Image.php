<?php

namespace app\models;

class Image extends Model
{
    public $id;
    public $name;
    public $likes;

    protected function getTableName() {
        return 'images';
    }

}