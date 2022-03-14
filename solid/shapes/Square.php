<?php 
	class Square implements ShapeInterface,ManageInterface  {
		public $length;

		function __construct($length)
		{
			$this->length = $length;
		}

		public function area(){
			return pow($this->length, 2);
		}

		public function calculate()
		{
			return $this->area();
		}
	}

 ?>