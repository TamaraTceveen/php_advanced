<?php
namespace app\models\example;

class Bulk extends Model
{
    public $weight;
    public $priceRate = 1;

    public function showPrice() {

        if($this->weight >= 1000){
            $this->priceRate = 0.9;
        }
        
        $totalPrice = ($this->price * $this->weight) * $this->priceRate;
        echo "Цена весового товара: " . $totalPrice . " За {$this->weight} грамм <br>";
    }

}