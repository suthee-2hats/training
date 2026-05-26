<?php 
namespace Fruit;
class Fruit
{
    public $color ;
    public $name ;
    public $number;
    
    public function __construct($name,$color,$number)
    {
    $this->name = $name ;
    $this->color = $color;
    $this->number = $number;
    }
    
    public function info()
    {
    echo "color: {$this->color}<br>";
    echo "name: {$this->name}<br>";
    echo "number: {$this->number}<br>";
    }
}
?>
