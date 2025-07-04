<?php       

// $i = 1;
// while ($i < 6) {
//   if ($i == 3) break;
//   echo $i;
//   $i++;
// }

// $i = 5;

// while ($i < 6):
//   echo $i;
//   $i++;
// endwhile;

// $i = 1;

// do {
//   echo $i;
//   $i++;
// } while ($i < 6);
// 

// $i = 8;

// do {
//   echo $i;
//   $i++;
// } while ($i < 6);
// $i = 1;

// do {
//   if ($i == 3) break;
//   echo $i;
//   $i++;
// } while ($i < 6);
// for ($x = 0; $x <= 10; $x++) {
//   echo "The number is: $x <br>";
// }

// for ($x = 0; $x <= 10; $x++) {
//   if ($x == 3) break;
//   echo "The number is: $x <br>";
// }
// for ($x = 0; $x <= 10; $x++) {
//   if ($x == 3) continue;
//   echo "The number is: $x <br>";
// }

// for ($x = 0; $x <= 100; $x+=10) {
//   echo "The number is: $x <br>";
// }

// $colors = array("red", "green", "blue", "yellow"); 

// foreach ($colors as $x) {
//   echo "$x <br>";
// }

// $members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

// foreach ($members as $x => $y) {
//   echo "$x : $y <br>";
// }


// class Car {
//   public $color;
//   public $model;
//   public function __construct($color, $model) {
//     $this->color = $color;
//     $this->model = $model;
//   }
// }

// $myCar = new Car("red", "Volvo");

// foreach ($myCar as $x => $y) {
//   echo "$x: $y <br>";
// }


$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "green") break;
  echo "$x <br>";
}

?>  

