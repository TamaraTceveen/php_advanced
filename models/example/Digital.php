<?php
namespace app\models\example;

class Digital extends Model
{
    public $size;
    public $priceRate = 2;

    public function showPrice() {
        $totalPrice = ($this->price * $this->count) / $this->priceRate;
        echo "Цена цифрового товара: " . $totalPrice . " Количество: {$this->count}<br>";
    }

}