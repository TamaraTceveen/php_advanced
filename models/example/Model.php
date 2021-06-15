<?php

namespace app\models\example;
use app\interfaces\example\IModel;

abstract class Model implements IModel
{
   public $id;
   public $name;
   public $price;
   public $proceeds;
   public $count;

   abstract public function showPrice();
}