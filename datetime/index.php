<?php

// Data time format date(format , timeStamp)

/*

d: days from 01 - 31
m: month from 01-12
y: represent years in four digit
l: represent the days of the week

 */
//  echo "Today is ". date("Y/m/d");
//  echo "Today is ". date("Y.m.d");
//  echo "Today is ". date("Y-m-d");
//  echo "Today is ". date("l");
//  echo "Today is ". date("h:i:sa");


// Create time for using strtotime()

$d = strtotime("+2 days");
echo date('Y/m/d h:i:sa',$d);
