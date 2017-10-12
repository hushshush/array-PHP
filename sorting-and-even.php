<?php
$numbers = array(-4, 8, 4, 2, 5, 3, 7, 8, -3, -1, 0, 10, 9, 14, 21);
$numbers = array_unique($numbers);
sort($numbers);
$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
  if ($numbers[$x] %2 == 0 && $numbers[$x] >= 0){
    echo $numbers[$x];
    echo "<br>";
 }
}
?>