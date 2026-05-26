<?php
namespace Fruit\Mango;
use Fruit\Fruit;
class Mango extends Fruit
{
     public function __construct()
     {
        parent::__construct("Mango", "Yellow", 50);
     }
     public function info()
     {
     parent::info();
     echo "i have mango";
     }
    
}
?>
