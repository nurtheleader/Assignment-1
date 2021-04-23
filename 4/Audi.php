<?php  
include 'Car.php';

/**
 * 
 */
class Audi extends Car
{
	
	public function color()
	{
		echo "Metallic Blue is the best Audi color in history<br>";
	}

	public function seat()
	{
		echo "<h1>I WANT HEATED SEATS</h1><br>";
	}
}

?>