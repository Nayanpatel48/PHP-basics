<?php

////////////////////////////////// Variables ////////////////////////////////

$x = 78; // integer type variable declared
$y = "Nayan";//String type variable declared

// Output the variables
echo $x;

/////////////////////////String template//////////////

$name = "Nayan";
echo "My name is $name";//My name is Nayan

//below example produces same output as above

echo "My name is ".$name;//My name is Nayan

//PHP is a Loosely Typed Language
//PHP has no command for declaring a variable, and the data type depends on the value of the variable.

//PHP supports the following data types:

// String
// Integer
// Float (floating point numbers - also called double)
// Boolean
// Array
// Object
// NULL
// Resource

/////////////////////////// get type ////////////////////////////

echo var_dump($x);//int(78)
echo var_dump($name);//string
?>