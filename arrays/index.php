<?php

// Working with arrays
/*
In Php when working with arrays we do have three types of arrays

1. indexedArrays : these are arrays that consist of indexes
2. Associative Arrays : these are arrays that consists of key values pairs
3. MultidimensionalArray: these are arrays that consist more that one arrays

 */

$cars = array("Volvo", "BMW", "Toyota");
//  var_dump(count($cars));

// foreach($cars as $car)
// {
//   echo "$car <br/>";
// }

function Myfunction($v)
{
    return $v;
}

print_r(array_map("Myfunction", $cars));
