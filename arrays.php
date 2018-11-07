<?php

/*
    3 Types of Arrays: 
        - Indexed
        - Associative
        - Multi-dimensional
*/

// Indexed
$people = array('Kevin', 'Jeremy', 'Sarah');
// echo $people[1];

$ids = array(23, 55, 12);
// echo $ids[2];

$cars = ['Honda', 'Tesla', 'Audi', 'BMW'];
// echo $cars[3];

// Add to array (last index known)
$cars[4] = 'Chevy';

// Add to array (if index of last item unknown)
$cars[] = 'Mercedes';

// count
// echo count($cars)

// print whole array
// print_r($cars);

// see what data type is array made of
var_dump($cars);

// Associative Arrays (allows you to define key and value)
$people = array('Iqra' => 'purple', 'Talha' => 'blue', 'Furqan' => 'green');
// OR
$people = ['Iqra' => 'purple', 'Talha' => 'blue', 'Furqan' => 'green'];
// echo $people['Talha'];

// Multidimensional (Array within an array)
$cars = array(
    array('Honda', 20, 10),
    array('Toyota', 30, 15),
    array('Hyndai', 6, 17)
);

echo $cars[1][0];
?>