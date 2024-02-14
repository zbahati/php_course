<?php

// example of strings

$word = " Hello bahati";

// Length of string

echo strlen($word);

// return number of words in string
$position = str_word_count($word);
echo $position;


// Search Text in string

echo strpos($word, "lo");