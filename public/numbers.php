<?php

// Numbers

$number1 = 45;
$number2 = '54sdsfgfhgbh';

if(is_numeric ($number1) && is_numeric ($number2)) {
    echo 'É numerico';
}else {
    echo 'Não é numerico';
}

echo '<br>';

echo ceil (34.52); // Arredonda pra cima
echo floor (34.52); // Arredonfa pra baixo