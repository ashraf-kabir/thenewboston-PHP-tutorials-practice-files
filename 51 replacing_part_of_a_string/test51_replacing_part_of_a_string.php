<?php

$find = array('is', 'string', 'example');
$replace = array('IS', 'STRING', 'EXAMPLE');

$str = 'This is a string, and is an example';

$new_string = str_replace($find, $replace, $str);

echo $new_string;
