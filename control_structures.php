<?php
$num_1=5;
$num_2= 10;
$num_3= "5";

echo "<h1>Control Structures</h1>";

if ($num_1 == $num_3) {
    echo "Hello from IF Block";
} elseif ($num_1 <$num_2) {
    echo "Hello from Elseif Block";
}else {
    echo "Hello from else Block";
}