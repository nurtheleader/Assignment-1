<?php  

class MyName{
	public function name($value)
	{
		echo $value;
	}

	private $key = 'This is the default value of key variable<br>';
	
	public function setMode($value1)
		{
			$this->key = $value1;
		}
	public function getMode()
	    {
	    	echo $this->key;
	    }    
}

?>