<?php

//Camelcase - MyName
// snake_case - my_name

$name = 'Rodolfo';


echo gettype($name); 
echo "<br>";

// String

echo gettype('Rodolfo');
echo "<br>";

// Numebrs - intergers, floats(duble)

echo gettype(123);
echo "<br>";
echo gettype(123.4);
echo "<br>";

// Boleans

echo gettype(true);
echo "<br>";

// Arrays

echo gettype(['Rodollfo', 39, true]);
echo "<br>";

// Object

class Person {

}

echo gettype(new Person);
echo "<br>";

// NULL

echo gettype(null); 