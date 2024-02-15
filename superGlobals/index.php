<?php

// PHP superglobles

/*
$GLOBALS ,
$_SERVER,
$_REQUEST,
$_POST,
$_GET,
$_FILE,
$_ENV,
$_COOKIES,
$_SESSIONS,
*/


// $name = 'BAHATI';
// function Hello(){
//   global $name;
//   echo $name;
// }

// Hello();

// function Hello (){
//   $GLOBALS['name'] = "Bahati";
//   echo $GLOBALS['name'];
// }

// Hello();

// echo $GLOBALS['name'];
// print_r($_SERVER);
print_r($_SERVER['PHP_SELF']);
print_r($_SERVER['REQUEST_METHOD']);
print_r($_SERVER['REQUEST_URI']);
