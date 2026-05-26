<?php 
namespace Fruit;
class Fruit
{
    public $color ;
    public $name ;
    public $number;
    protected $price;
    
    public function __construct($name,$color,$number,$price)
    {

   	 $this->name = $name ;
   	 $this->color = $color;
	 $this->number = $number;
	 $this->price = $price;
    }
    
    public function showInfo()
    {
   	 echo "color: {$this->color}\n";
   	 echo "name: {$this->name}\n";
   	 echo "number: {$this->number}";
    }

    protected function showPrice()
    {
	    echo "price : {$this->price}\n";
    }

    private function washFruit()
    {
	    echo "Fruit washed properly\n";
    }

    public function readyToSell()
    {
	    $this->washFruit();
	    echo "Fruit ready to sell\n";
    }	    

}
?>
