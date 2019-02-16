<?php

$str1 = 'This is an example string .';

/*
 * $stringwordCount = str_word_count($str1);
 * echo $stringwordCount;
 */

/*
 * $stringwordCount = str_word_count($str1, 2);
 * print_r($stringwordCount);
 */
// associative array

/*
 * $stringwordCount = str_word_count($str1, 1, '.');
 * print_r($stringwordCount);
 */

//echo $stringwordCount;


$str2 = 'This is an example string & this is a tutorial.';

$stringwordCount = str_word_count($str2, 1, '&.!');
print_r($stringwordCount);
//echo $stringwordCount;