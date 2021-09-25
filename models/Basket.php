<?php

namespace app\models;

use app\engine\Db;

class Basket extends DBModel
{
    protected $id;
    protected $item_id;
    protected $session_id;
    protected $item_count;

    protected $props = [
        'item_id' => false,
        'session_id' => false,
        'item_count' => false
    ];

    public function __construct($item_id = null, $session_id = null, $item_count = null)
    {
        $this->item_id = $item_id;
        $this->session_id = $session_id;
        $this->item_count = $item_count;
        
        // $sql = "SELECT basket.id FROM `basket` WHERE basket.item_id = {$this->item_id} AND basket.session_id = '{$this->session_id}'";
        // $queryResult = Db::getInstance()->queryOne($sql);
        // if($queryResult){
        //     //var_dump("/////".$queryResult['id']."////");
        //     $this->id=$queryResult['id'];
        // }
       
    }

    public static function getBasket($session_id) {
        
        $sql = "SELECT basket.id basket_id, catalog.id prod_id, catalog.name, catalog.description, catalog.price, catalog.image FROM `basket`, `catalog`
         WHERE `session_id` = '{$session_id}' AND basket.item_id = catalog.id";

        return Db::getInstance()->queryAll($sql);
    }

    protected static function getTableName() {
        return 'basket';
    }

}