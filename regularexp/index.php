<?php

// regular expression
// the forward slash / is a delimeter, w3school is the pattern , i is the modifier;

// $exp = "/W3school/i";

$word ="Hello brother bahatier i am there!";
// $exp = "/bahati/i";
// echo preg_match($exp, $word);

$exp = "/er/i";

echo preg_match_all($exp, $word);