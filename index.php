<?php

//farst code in php
echo"<h1>Class 1</h1>";
echo "<br>";
echo "Hello World";

//comment
//single line comment
/*
multi line comment
*/
#single line comment

//print
print "<h1>Print</h1>";
Print "<br>";
print "Hello World";
echo "<br>";

//variable
echo "<h1>Variable</h1>";
$var="Hello World!";
echo $var;

//data type
echo "<h1>Data Type</h1>";
$var="Hello World!";
echo $var;
echo "<br>";
echo gettype($var);
echo "<br>";
var_dump($var);
echo "<br>";

//string
echo "<h1>String</h1>";
$var="Hello World!";
echo $var;
echo "<br>";
echo gettype($var);
echo "<br>";
var_dump($var);
echo "<br>";

//integer
echo "<h1>Integer</h1>";
$var=10;
echo $var;
echo "<br>";
echo gettype($var);
echo "<br>";
var_dump($var);
echo "<br>";

//float
echo "<h1>Float</h1>";
$var=10.50;
echo $var;
echo "<br>";
echo gettype($var);
echo "<br>";
var_dump($var);
echo "<br>";

//boolean
echo "<h1>Boolean</h1>";
$var=true;
echo $var;
echo "<br>";
echo gettype($var);
echo "<br>";
var_dump($var);
echo "<br>";

//array
echo "<h1>Array</h1>";
$var=array("a","b","c");
print_r($var);
echo "<br>";
var_dump($var);

//index array
echo "<h1>Index Array</h1>";
$var=array("a","b","c");
echo $var[0];
echo "<br>";
echo gettype($var);
echo "<br>";
var_dump($var);
echo "<br>";

//associative array
echo "<h1>Associative Array</h1>";
$var=array("a"=>"A","b"=>"B","c"=>"C");
echo $var["a"];
echo "<br>";
echo gettype($var);
echo "<br>";
var_dump($var);
echo "<br>";

//object
echo "<h1>Object</h1>";
class Person{
    public $id;
    public $name;   
    public $age;   
    public $email;
    public $gender;
}
$person = new Person();
$person->id=1;
$person->name= "John Doe";
$person->age= "30";
$person->email= "G6D5w@example.com";
$person->gender= "male";
var_dump($person);

//null
echo "<h1>Null</h1>";
$var=null;
echo $var;
echo "<br>";
echo gettype($var);
echo "<br>";
var_dump($var);
echo "<br>";

//resource
echo "<h1>Resource</h1>";



