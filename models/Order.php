<?php

namespace app\models;

class Order extends Model
{
    public $id;
    public $name;
    public $phone;
    public $session_id;
    public $order_date;
    public $status;

    public function __construct($name = '', $phone = '', $session_id = '', $order_date = '', $status = '')
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->session_id = $session_id;
        $this->order_date = $order_date;
        $this->status = $status;
    }

    protected function getTableName() {
        return 'orders';
    }

}