<?php

// while loop
// do while
// for loop
// foreach

// $i = 1;
// while($i< 10)
// {
//   echo $i;
//   $i+=1;
// }

// $i = 0;
// do{
//   echo $i;
//   $i+=1;
// }while($i< 20);

// for ($i = 1; $i < 20; $i++) {
//     echo $i;
// }

$lists = array(1, 2, 3, 4, "bahati", "The ben", "hello");
$items = [];
foreach ($lists as $item) {
  $items[] = $item;
}

print_r($items[3]);