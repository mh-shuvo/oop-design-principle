<?php 

include 'autoloader.php';

echo "Liskove Subsituation Principle\n";

$shapes = [
  new Circle(2),
  new Square(5),
  new Square(6),
  new Rectangle(5,10)
];

$solidShapes = [
  new Circle(2),
  new Rectangle(5,10)
];

$areas = new AreaController($shapes);
$output = new OutputController($areas);

$volumes = new VolumeController($solidShapes);
$output1 = new OutputController($volumes);

echo $output->JSON();
echo $output1->HTML();

 ?>