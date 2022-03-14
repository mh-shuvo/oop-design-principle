<?php 

include 'autoloader.php';

echo "Open Closed Principle\n";

$shapes = [
  new Circle(2),
  new Square(5),
  new Square(6),
  new Rectangle(5,10)
];

$areas = new AreaController($shapes);
$output = new OutputController($areas);

echo $output->jSON();
echo $output->HTML();


 ?>