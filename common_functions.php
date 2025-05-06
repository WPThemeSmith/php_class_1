<?php

// Common functions for PHP

// String Functions
function stringFunctions() {
    $str = "Hello, I am Rakib!";
    echo "String Length: " . strlen($str) . "<br>"; // Output: 18
    echo "String Position: " . strpos($str, "Rakib") . "<br>"; // Output: 12
    echo "String Replace: " . str_replace("Rakib", "PHP", $str) . "<br>"; // Output: Hello, I am PHP!
    echo "String Uppercase: " . strtoupper($str) . "<br>"; // Output: HELLO, I AM RAKIB!
    echo "String Lowercase: " . strtolower($str) . "<br>"; // Output: hello, i am rakib!
    echo "substring: " . substr($str, 11, 18) . "<br>"; // Output: Rakib!
    echo "String Word Count: " . str_word_count($str) . "<br>"; // Output: 5
    echo "trim: " . trim($str) . "<br>"; // Output: Hello, I am Rakib!
    echo "String Reverse: " . strrev($str) . "<br>"; // Output: !bikaR ma I ,olleH
}
// stringFunctions();


//Number Functions
function numberFunctions() {
    $num = 123.456789;
    echo "Number Format: " . number_format($num, 2) . "<br>"; // Output: 123.46
    echo "Round: " . round($num, 2) . "<br>"; // Output: 123.46
    echo "Ceil: " . ceil($num) . "<br>"; // Output: 124
    echo "Floor: " . floor($num) . "<br>"; // Output: 123
    echo "Square Root: " . sqrt($num) . "<br>"; // Output: 11.1131
    echo "Absolute Value: " . abs(-$num) . "<br>"; // Output: 123.456789
    echo "Random Number: " . rand(1, 100) . "<br>"; // Output: Random number between 1 and 100  
    echo "Mtrand: " . mt_rand(1, 100) . "<br>"; // Output: Random number between 1 and 100
    echo "Pi: " . pi() . "<br>"; // Output: 3.1415926535898
    echo "Power: " . pow(2, 3) . "<br>"; // Output: 8
    echo decbin($num) . decbin($num) . "<br>"; // Output: 1111011.011110001011010
    echo "Hexadecimal: " . dechex($num) . "<br>"; // Output: 7b.74bc6
    echo "Octal: " . decoct($num) . "<br>"; // Output: 173.346 
    echo min(1, 2, 3, 4, 5) . "<br>"; // Output: 1
    echo max(1, 2, 3, 4, 5) . "<br>"; // Output: 5
}

// numberFunctions();


// Constant Functions
function constantFunctions() {
    echo "PHP Version: " . PHP_VERSION . "<br>"; // Output: 8.0.3
    echo "PHP OS: " . PHP_OS . "<br>"; // Output: Linux
    echo "PHP SAPI: " . PHP_SAPI . "<br>"; // Output: cli
    echo "PHP Extensions: " . implode(", ", get_loaded_extensions()) . "<br>";
}
// constantFunctions();

define("MY_CONSTANT", "Rakib");

// echo "Athor Name: ".MY_CONSTANT . "<br>"; // Output: Athor Name: Rakib