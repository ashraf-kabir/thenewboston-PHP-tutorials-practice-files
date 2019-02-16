<?php
/**
 * Created by PhpStorm.
 * User: sonnet
 * Date: 11/08/18
 * Time: 22:08
 */

$filename = 'names.txt';

$handle = fopen($filename,'r');

$datain = fread($handle, filesize($filename));
/*
echo fread($handle, 5);   //only 5 chars
*/

$names_array = explode(',', $datain);

foreach ($names_array as $name) {
    echo $name.'<br>';
}

/*
 * echo $names_array[0];
 */