<?php 
	
	class OutputController{

		protected $calculator;


		function __construct(AreaController $calculator)
		{
			$this->calculator = $calculator;
		}

		public function JSON(){
			return json_encode([
				'sum' => round($this->calculator->sum(),2)
			]);
		}

		public function HTML(){
			return implode('',[
				'Total summation: ',
				round($this->calculator->sum(),2)
			]);
		}
	}

 ?>