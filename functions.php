<?php

// Defining and Calling a Function
function myFunction() {
        echo "Hello World!";
    }
    
    //myFunction();

// Function with Parameters
function myFunctionWithParams($name) {
        echo "Hey, " . $name . "!";
    }
    
   // myFunctionWithParams("Rakib");

// Function with Default Parameter Value
function myFunctionWithDefaultParam($name = "Guest") {
        echo "Hey " . $name . "!";
    }
    
   // myFunctionWithDefaultParam();

 // Function with Return Value
function myFunctionWithReturn($name) {
        return "Hey, " . $name . "!";
    }

    $greeting = myFunctionWithReturn("Rakib");
   // echo $greeting;
    
//echo "<hr>";
function multiply($a, $b) {
        return $a * $b;
    }

    $result = multiply(5, 10);
   // echo "The result is: " . $result; // Output: The result is: 50


// Function with Type Declaration
function addNumbers(int $a, int $b): int {
        return $a + $b;
    }

    $sum = addNumbers(5, 10);
   // echo "The sum is: " . $sum; // Output: The sum is: 15


//Function Variables scope in PHP

//Local Scope
function local_scope() {
        $x = 10; // Local variable
        echo $x; // Output: 10
    }
    
    //local_scope();

//Global Scope
$y = 20; // Global variable
function global_scope() {
    global $y; // Accessing global variable
    echo $y; // Output: 20
    
}

// global_scope();

//Global Array
$z = array("a" => 1, "b" => 2, "c" => 3); // Global array
function global_array() {
    global $z; // Accessing global array
    echo $z["a"]; // Output: 1
}
   // global_array();

//Static Scope
function static_variable() {
        static $count = 0; // Static variable
        $count++;
        echo $count.","; // Output: 1, 2, 3, ...
    }
    
    // static_variable();
    // static_variable();
    // static_variable();


//Anonymous Functions (Closure)
$greet = function($name) {
        return "My name is, " . $name . "!";
    };

    echo $greet("Rakib"); // Output: Hello, Rakib!