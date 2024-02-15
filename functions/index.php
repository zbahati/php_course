<?php

// php have 1000's of built in functions

// function Sum($number=0, $number2= 0){
//   $sum = $number+ $number2;
//   echo "This is the sum = $sum";
// }

// echo Sum();

// references function

// function Sum(&$value){
//   $value +=5;
// }

// $number = 2;
// Sum($number);

// echo $number;

// A function that can accept array of number but not specified

// function sumMyNumbers(...$x)
// {
//     $n = 0;
//     $len = count($x);
//     for ($i = 0; $i < $len; $i++) {
//         $n += $x[$i];
//     }
//     return $n;
// }

// $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
// echo $a;

// php loosely typed langauage

function Sum(int $a, int $b)
{
    return $a + $b;
}

echo Sum(2, "4 days");
