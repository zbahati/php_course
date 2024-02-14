<?php
// Variables
/*
In PHP we do have 3 kind fof variables
1. local Variables : this are variables that are declared inside the function , so this can be accessible only inside the function

2. Global Variables: This are the variable that can be accessible in intire app
3. static variables : This works only when we need to keep the value of the variable even if the work of the variable done,
means we can keep the last value of the variable to be used, using the static
 */

//  Local variable

// function Hello()
// {
//     $name = "Bahati";
//     echo "Hello $name";
// }

// Hello();

// This will thrown errors
// echo $name;

// Global Variable

// $name = 'Bahati';

// function Hello()
// {
//     echo $GLOBALS['name'];
// }

// Hello();

// PHP has 7 data typed but php is loosely typed language

/*
0. String
1. Interger
2. Float(double)
3. Boolean
4. Null
5. Array
6. Object
7. Resources

 */

// loosely typed language
 $x = 5.6;
 $name = "Hello";
 var_dump($name);
