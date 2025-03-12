<?php

/*

Closures

*/

function teste ($name) 
{
    $person = function() use ($name) {
        return $name;
    };

    return $person;
}



var_dump(teste('Rodolfo')());