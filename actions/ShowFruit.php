<?php
namespace Fruit\Actions;
use Fruit\Mango\Mango;
class ShowFruit
{
 
   public function __construct(){	
 	
	   $mango = new Mango(
                              "Mango",
                              "Yellow",
                                50,
                                120,
                                "High"
  );

     
	echo "<h2>Mango Details</h2>";

	$mango->showInfo();

	echo "<br>";

	$mango->showMangoPrice();

	echo "<br>";

	$mango->makeJuice();

	echo "<br>";

	$mango->readyToSell();
}}
?>
