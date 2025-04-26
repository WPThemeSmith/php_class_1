<?php

//Arithmetic Operators
$one=1;
$two="2";
$three=3;
$four= "4";
$five= 5;

echo "<h1>Arithmetic Operators</h1>";
echo "<br>";
echo "<h3>Addition(+)</h3>";
echo $two+$three;   //Output: 5
echo "<br>";
echo "<h3>Subtraction(-)</h3>";
echo $four-$two;    //Output: 2
echo "<br>";
echo "<h3>Multiplication()*</h3>";
echo $two*$four;    //Output: 8
echo "<br>";
echo "<h3>Division(/)</h3>";
echo $four/$two;    //Output: 2
echo "<br>";
echo "<h3>Modulus(%)</h3>";
echo $five%$three;  //Output: 2

echo "<br>";

//Assignment Operators

echo "<h1>Assignment Operators</h1>";
echo "<br>";
echo "<h3>Equal(=)</h3>";
echo $a=5;  //Output: 5
echo "<br>";
echo "<h3>Addition(+=)</h3>";
echo $a+=2; //Output: 7
echo "<br>";
echo "<h3>Subtraction(-=)</h3>";
echo $a-=2; //Output: 5
echo "<br>";
echo "<h3>Multiplication(*=)</h3>";
echo $a*=2; //Output: 10
echo "<br>";
echo "<h3>Division(/=)</h3>";
echo $a/=2; //Output: 5
echo "<br>";
echo "<h3>Modulus(%=)</h3>";
echo $a%=2; //Output: 1

echo "<br>";

//Comparison Operators
$b=4;
$c="4";
$d=5;

echo "<h1>Comparison Operators</h1>";
echo "<br>";
echo "<h3>Equal(==)</h3>";
echo "<br>";
var_dump($b==$c);  //Output: true
echo "<br>";
echo "<h3>Data Type Equal(===)</h3>";
echo "<br>";
var_dump($b===$c); //Output: False
echo "<br>";
echo "<h3>Not Equal(!=)</h3>";
echo "<br>";
var_dump($b!=$c);   //Output: False
echo "<br>";
echo "<h3>Not Data Type Equal(!==)</h3>";
echo "<br>";
var_dump($b!==$c);   //Output: True
echo "<br>";
echo "<h3>Greater Than(>)</h3>";
echo "<br>";
var_dump($b>$d);    //Output: False
echo "<br>";
echo "<h3>Less Than(<)</h3>";
echo "<br>";
var_dump($b<$d);    //Output: True
echo "<br>";
echo "<h3>Greater Than or Equal To(>=)</h3>";
echo "<br>";
var_dump($b>=$c);   //Output: True
echo "<br>";
echo "<h3>Less Than or Equal To(<=)</h3>";
echo "<br>";
var_dump($b<=$c);   //Output: True

