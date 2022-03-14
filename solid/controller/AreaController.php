<?php 
	
	/**
 * 
 */
class AreaController
{
	public $shapes;
	
	function __construct($shapes)
	{
		$this->shapes = $shapes;
	}

	public function sum(){

		foreach ($this->shapes as $key => $shape) {

			$area[] = $shape->calculate();

		}

		return array_sum($area);

	}

}


 ?>