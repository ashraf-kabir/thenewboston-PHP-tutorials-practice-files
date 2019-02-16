<?php

$str = 'This part don\'t search. This part search.';
$str_new = substr_replace($str, 'alex', 29, 4);

echo $str_new;
