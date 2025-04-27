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

$score = 40;
switch ($score) {
    case $score > 100: 
        echo "I am over talented";
        break;
    case $score > 80 && $score < 90:
        echo "I am GPA 5";
        break;
    case $score > 90 && $score < 100: 
        echo "I am over GPA 5";
        break;
    case $score < 80 && $score > 70: 
        echo "I am under GPA 5";
        break;
        case $score < 69 && $score > 33: 
            echo "I am Pass";
            break;
    default:
        echo "I am fail";
        break;
}