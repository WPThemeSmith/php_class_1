<?php

// Array

// An array is a special variable, which can hold more than one value at a time
// An array can hold values of different data types
// An array can hold objects, strings, integers, and other arrays

// Create an array

//In PHP, there are three types of arrays:
// 1. Indexed arrays - An array with a numeric index

$my_friends = array("Moni", "Ali Hossain", "Farhan Sadik");

// echo $my_friends[0]; // Moni
// echo "<br>";
// echo $my_friends[1]; // Ali Hossain
// echo "<br>";
// echo $my_friends[2]; // Farhan Sadik

// echo "<pre>";
// print_r($my_friends);   // Array ( [0] => Moni [1] => Ali Hossain [2] => Farhan Sadik )


// 2. Associative arrays - An array with named keys

$my_bio = array("name" => "Rakib", "age" => 21, "address" => "Dhaka", "phone" => "01700000000", "email" => "rakib@gmail");

// foreach ($my_bio as $key => $value) {
//     echo "$key: $value <br>";
// }   //name: Rakib age: 21 address: Dhaka phone: 01700000000 email: rakib@gmail

// echo "<pre>";
// print_r($my_bio);   // Array ( [name] => Rakib [age] => 21 [address] => Dhaka [phone] => 01700000000 [email] => rakib@gmail )

// 3. Multidimensional arrays - An array containing one or more arrays

$multi_array = [
    ["Moni", "Ali Hossain", "Farhan Sadik"],
    ["Rakib", "Rifat", "Rafiq"],
    ["Shakib", "Sakib", "Shahid"]
];
// echo $multi_array [0][0]; // Moni
// echo "<br>";
// echo $multi_array [1][0];   // Rakib


$students = [
    [
        "Name" => "Ratna", 
        "Marks" => 85, 
        "Grade" => "A"
    ],
    [
        "Name" => "Keya", 
        "Marks" => 78, 
        "Grade" => "B"
    ],
    [
        "Name" => "Moni", 
        "Marks" => 92, 
        "Grade" => "A+"
    ],
    [
        "Name" => "Rakibul", 
        "Marks" => 65, 
        "Grade" => "C"
    ],
    [
        "Name" => "Rakib", 
        "Marks" => 88, 
        "Grade" => "A"
    ]
];

?>

<h2>Student Results</h2>

<table>
    <thead>
        <th>Name</th>
        <th>Marks</th>
        <th>Grade</th>
    </thead>
    <tbody>
        <?php if( is_array( $students ) ) : ?>
            <?php foreach( $students as $element ) : ?>
                <tr>
                    <td><?php echo $element['Name'] ?></td>
                    <td><?php echo $element['Marks'] ?></td>
                    <td><?php echo $element['Grade'] ?></td>
                </tr>
            <?php endforeach ?>
        <?php endif ?>
    </tbody>
</table>

<h2>Student Results</h2>

<table>
    <tr>
        <th>Name</th>
        <th>Marks</th>
        <th>Grade</th>
    </tr>
    <?php
    foreach ($students as $student) {
        echo "<tr>";
        echo "<td>" . $student["Name"] . "</td>";
        echo "<td>" . $student["Marks"] . "</td>";
        echo "<td>" . $student["Grade"] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

<style>
    table {
        width: 50%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
</style>

<?php
echo "<pre>";
print_r($students);   // Array ( [0] => Array ( [Name] => Ratna [Marks] => 85 [Grade] => A ) [1] => Array ( [Name] => Keya [Marks] => 78 [Grade] => B ) [2] => Array ( [Name] => Moni [Marks] => 92 [Grade] => A+ ) [3] => Array ( [Name] => Rakibul [Marks] => 65 [Grade] => C ) [4] => Array ( [Name] => Rakib [Marks] => 88 [Grade] => A ) )



//Creating Arrays
// 1. Using array() function
$colors = array("red", "green", "blue", "yellow");

// 2. Using short array syntax (PHP 5.4+)
$fruits = ['name' => 'banana', 'color' => 'yellow', 'taste' => 'sweet'];


//Assessing Array Elements
echo $colors[0]; // Output: red
echo "<br>";
echo $fruits['name']; // Output: banana
echo '<br>';
echo $fruits['color']; // Output: yellow
echo '<br>';
echo $fruits['taste']; // Output: sweet

//Modifying Array Elements
$colors[1] = "purple"; // Change the second element to purple
echo "<br>";
$fruits['color'] = "green"; // Change the color to green

echo $colors[1]; // Output: purple
echo "<br>";
echo $fruits['color']; // Output: green
echo "<br>";
//Adding Elements to an Array
$colors[] = "orange"; // Add a new element to the end of the array
$fruits['size'] = "medium"; // Add a new key-value pair to the associative array


echo $colors[4]; // Output: orange
echo "<br>";
echo $fruits['size']; // Output: medium


//Removing Elements from an Array
unset($colors[2]); // Remove the third element from the indexed array
unset($fruits['taste']); // Remove the taste key-value pair from the associative array

// echo "<br>";
// echo $colors[2]; 
// echo "<br>";
// echo $fruits["taste"]; echo "<br>";
echo "<br>";


//Useful Array Functions

//$number_array = [1, 2, 3, 4, 5];

echo count($colors); // Count the number of elements in the array
echo "<br>";

$values = array_values($fruits); // Get all values from the associative array
echo "<pre>";
print_r($values); echo "<br>";

$keys = array_keys($fruits); // Get all keys from the associative array
echo "<pre>";
print_r($keys); echo "<br>";

if (in_array("red", $colors)) { // Check if a value exists in the array
    echo "Red is in the array";
} else {
    echo "Red is not in the array";
}
echo "<br>";

if (is_array($colors)) { // Check if a variable is an array
    echo "This is an array";
} else {
    echo "This is not an array";
}
echo "<br>";

if (array_key_exists("name", $fruits)) { // Check if a key exists in the associative array
    echo "The key 'name' exists in the array";
} else {
    echo "The key 'name' does not exist in the array";
}
echo "<br>";

//Looping

foreach ($colors as $color) { // Loop through the indexed array
    echo $color . ", ";
}
echo "<br>";

foreach ($fruits as $key => $value) { // Loop through the associative array
    echo "$key: $value <br>";
}
echo "<br>";