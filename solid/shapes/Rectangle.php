<?php 
class Rectangle implements ShapeInterface,ManageInterface {
	public $height,$width;

	function __construct($height,$width)
	{
		$this->height = $height;
		$this->width = $width;
	}

	public function area(){

		return $this->height * $this->width;

	}

	public function calculate(){
		return $this->area();
	}
}

 ?>