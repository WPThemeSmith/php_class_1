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



