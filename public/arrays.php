<?php

// Arrays

$names = ['Rodolfo', 'Lucas', 'Maria', 'Jose', 'Renata', 34, true, false]; 

$names[7] = 'Pipoca';
$length = count($names); // Para adicionar um dado no final do array
array_push($names, 'teste'); // Para adicionar um dado no final do array
$names[$length] = 'last';
array_unshift($names, 'first'); // Para adicionar um dado no inicio do arrays
// print_r ($names[1]); // Para imprimr na tela o array
var_dump($names); // Para imprimr na tela o array e tipos de dados

// Indices especificos

$person = ['name' => 'Rodolflo', 'age' => 39, ];

var_dump($person['name']);
var_dump($person['age']);


// Arrays dentro de arrays

$person2 = ['name' => 'Rodolflo', 'age' => 39, 'documents'=> ['cpf' => '2316456', 'rg' => '12132346' ] ];

var_dump($person2['documents']);