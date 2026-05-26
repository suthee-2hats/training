<?php

namespace Fruit\Mango;

use Fruit\Fruit;

class Mango extends Fruit
{
    public $sweetnessLevel;

    public function __construct($name, $color, $quantity, $price, $sweetnessLevel)
    {
        parent::__construct($name, $color, $quantity, $price);

        $this->sweetnessLevel = $sweetnessLevel;
    }

    public function showInfo()
    {
        parent::showInfo();

        echo "Sweetness Level : {$this->sweetnessLevel}<br>";
    }

    public function showMangoPrice()
    {
        $this->showPrice();
    }

    public function makeJuice()
    {
        echo "{$this->name} juice is ready<br>";
    }
}
?>
