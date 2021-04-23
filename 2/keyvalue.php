<?php  

/**
 * 
 */
class keyvalue
{
	private $key = '';
	
	public function setMode($value)
	{
		$this->key = $value;
	}

	public function getMode()
	{
		echo $this->key;
	}
}


?>