<?php

$offset = 0;

$find = 'string';
$find_length = strlen($find);

$str1 = 'This is a string, and it is an example.';

//strpos($str1, $find, 3);

while ($string_position = strpos($str1, $find, $offset)) {
    echo '<strong>'.$find.'</strong> found at '.$string_position.'<br>';
    $offset = $string_position +  $find_length;
}
