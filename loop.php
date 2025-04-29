<?php

echo "<h1>Loop</h1>";
echo "<br>";

echo "<h3>For Loop</h3>";
for ($x=0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}  
echo "<br>";

echo "<h3>For Each Loop</h3>";
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $value) {
    echo "$value <br>";
}   
echo "<br>";

echo "<h3>While Loop</h3>";
$y = 1;
while ($y <= 5) {
    echo "The number is: $y <br>";
    $y++;
}
echo "<br>";

echo "<h3>Do While Loop</h3>";
$z = 1;
do {
    echo "The number is: $z <br>";
    $z++;
} while ($z <= 5);
echo "<br>";

echo "<h3>Break Loop</h3>";
$w = 1;
while (true) {
    echo "The number is: $w <br>";
    $w++;
    if ($w > 5) {
        break;
    }
}