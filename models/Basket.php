<?php

namespace app\models;

class Basket extends Model
{
    public $id;
    public $item_id;
    public $session_id;
    public $item_count;

    public function __construct($item_id = '', $session_id = '', $item_count = '')
    {
        $this->item_id = $item_id;
        $this->session_id = $session_id;
        $this->item_count = $item_count;
    }

    protected function getTableName() {
        return 'basket';
    }

}