<?php
/**
 * Created by PhpStorm.
 * User: sonnet
 * Date: 11/08/18
 * Time: 11:48
 */

$handle = fopen('names.txt','w');

fwrite($handle,'Alex'."\n");
fwrite($handle,'Billy');

fclose($handle);

echo 'Written';