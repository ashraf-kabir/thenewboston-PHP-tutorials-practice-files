<?php

include 'count.php';

hit_count();


$file = fopen("count.txt", "r");

while (!feof($file)) {
    echo fgets($file) . "<br>";
}

fclose($file);
