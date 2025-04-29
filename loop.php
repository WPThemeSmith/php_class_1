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