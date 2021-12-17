<?php

echo <<<START
SOLID Principle
SOLID stands for:
    S - Single-responsiblity Principle 
    O - Open-closed Principle
    L - Liskov Substitution Principle
    I - Interface Segregation Principle
    D - Dependency Inversion Principle \n
START;

class Square
{
    public $length;

    public function __construct($length)
    {
        $this->length = $length;
    }

    public function area(){
        return pow($this->length,2);
    }
}

class Circle {
    public $radius;
    public function __construct($radius){
        $this->radius = $radius;
    }

    public function area(){
        return pow($this->radius,2);
    }
}


class AreaCalculator {
    protected $shapes;
    public function __construct($shapes = []){
        $this->shapes = $shapes;
    }

    public function sum(){
        foreach($this->shapes as $shape)
            {
                $area[] = $shape->area();
            }
        return round(array_sum(($area)),2);
        
    }

    public function output(){
        return implode(':',[
            'Sum of the areas of provided shapes',
            $this->sum()
        ]);
    }
}

class SumCalculatorOutputter{
    protected $calculator;
    public function __construct(AreaCalculator $calculator){
        $this->calculator = $calculator;
    }
    public function JSON()
    {
        $data = [
            'sum' => $this->calculator->sum()
        ];
        return json_encode($data,true);
    }
    public function HTML()
    {
        return implode(':',[
            'Sum of the areas of provided shapes',
            $this->calculator->sum()
        ]);
    }
}

$shapes = [
    new Circle(2),
    new Square(5),
    new Square(6),
  ];
  
  $areas = new AreaCalculator($shapes);
  $output = new SumCalculatorOutputter($areas);
  
  echo $output->HTML();
  echo "\n";
  echo $output->JSON();