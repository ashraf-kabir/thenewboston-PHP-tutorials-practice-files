<?php

$str1 = 'abcdefghij0123456789';
$str_shuffled = str_shuffle($str1);

//$half = substr($str_shuffled, 0, 5);
$half = substr($str_shuffled, 0, strlen($str1)/2);

echo $half;

?>

<br><br>

<?php
$str2 = 'This is an example string.';
$str2_reversed = strrev($str2);

echo $str2_reversed;
