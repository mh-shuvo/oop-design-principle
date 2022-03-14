<?php 
	
class Circle implements ShapeInterface,ManageInterface {
	public $radius;

	function __construct($radius)
	{
		$this->radius = $radius;
	}

	public function area(){

		return pi() * pow($this->radius, 2);

	}
	public function calculate(){
		return $this->area();
	}
}


 ?>