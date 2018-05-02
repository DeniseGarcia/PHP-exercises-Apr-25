<?php


$x = $_GET['num1'];
$y = $_GET['num2'];

function addNums($x,$y) {
$result = $x + $y;
return $result;
}
print addNums("$x","$y"); 

?>