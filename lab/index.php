<?php

$length = 10;
$width = 5;

$area = $length * $width;
$perimeter = 2 * ($length + $width);

echo "Length: " . $length . "<br>";
echo "Width: " . $width . "<br>";
echo "Area: " . $area . "<br>";
echo "Perimeter: " . $perimeter . "<br>";

$amount = 100;
$vat = $amount * (15/100);
echo "Vat: ". $vat . "<br>";


$num = 6;

if($num % 2 == 0)
  {
    echo "This is a EVEN number <br>";
  }
else{
  echo "This is a ODD number <br>";
}

$a = 5;
$b = 6;
$c = 4;

if($a > $b && $a > $c)
  {
    echo $a . " is the largest number <br>";
  }

else if($b > $c && $b > $a)
  {
    echo $b . " is the largest number <br>";
  }

else
  {
    echo $c . " is the largest number <br>";
  }



for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}
echo "<br>";

$arr = array(5, 10, 15, 20, 25);
$search = 20;

for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] == $search) {
        echo "Element found <br>";
        break;
    } 
}

for ($i = 1; $i <= 3; $i++) {        
    for ($j = 1; $j <= $i; $j++) {   
        echo "* ";
    }
    echo "<br>";  
}

?>