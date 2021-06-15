<?php
namespace app\models\example;

class Product extends Model
{
    public $package;
    public $priceRate = 1;
    public $color;

    public function showPrice() {
        $totalPrice = ($this->count * $this->price) * $this->priceRate;
        echo "Цена в упаковке: " . $totalPrice . " Количество: {$this->count} <br>";
    }

}