<?php

namespace app\models;

class Basket extends Model
{
    public $id;
    public $item_id;
    public $session_id;
    public $item_count;

    protected function getTableName() {
        return 'basket';
    }

}