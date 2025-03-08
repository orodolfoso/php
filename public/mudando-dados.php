<?php

/*

Transformando um array em um object

 - (string)
 - (boolen)
 - (float)
 - (integer)
 - (double)
 - (object)
 - (array)
 - intVal
 - floatVAl
 - doubleVal
 - strVal
 - boolVal

*/ 




// $names = ['Rodolfo', 'José', 'Lucas', 'Renata'];
// $change = (object)$names;

// var_dump($change);


// Como procurar pelo indice de um array que foi transformado em object

// $person = ['name'=> 'Rodolfo', 'age' => 38, 'profession' => 'Programador'];
// $change = (object)$person;

// var_dump($change->name);

// class Person  {

//     Private $name;

//     public function teste() {
//         return'teste';
//     }
// }

// $person = new Person;

$person = 'Rodolfo';


$change = intval ($person);
// $change = (array) $person;
var_dump($change);