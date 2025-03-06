<?php

$number1 = 70;
$number2 = 50;
$isAdmin  = true;

$result = $number1 > $number2 || 'true' === true;

echo ($result) ? 'É verdadeiro' : 'Não é verdadeiro';