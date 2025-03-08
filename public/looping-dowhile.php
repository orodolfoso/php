<?php

/*

Looping Do While

*/


$names = ['Rodolfo', 'Lucas', 'Renata'];


$i = 0;
do {
    echo $names[$i];
    $i++;
} while ($i < count ($names));