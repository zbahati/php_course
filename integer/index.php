<?php
// interger has support    -2147483648 and 2147483647 in 32 bit systems, and between -9223372036854775808 and 9223372036854775807 in 64 bit systems

// echo PHP_INT_MAX;
// echo PHP_INT_MIN;
// ECHO PHP_INT_SIZE;

$number = '5000';
var_dump(is_int($number));

// Interger casting

$number = (int) $number;

var_dump($number);

var_dump(is_numeric($number));
