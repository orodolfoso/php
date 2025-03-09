<?php

/*

Looping - Continue e Break

*/

$names = ['Rodolfo', 'Lucas', 'Renata'];


// for ($i = 0; $i  <count($names) ; $i ++) { 

//     if($i == 1) {
//         break;
//     }
//     echo $names[$i];
   
// }

foreach ($names as $key => $name) {
    echo $name;
    if($key == 1) {
        break;
    }

   
}