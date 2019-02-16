<?php
/**
 * Created by PhpStorm.
 * User: sonnet
 * Date: 16/08/18
 * Time: 19:00
 */


function hit_count() {
    $ip_address = $_SERVER['REMOTE_ADDR'];
    $ip_file = file('ip.txt');

    $found=0;
    foreach ($ip_file as $ip) {
        $ip_single = trim($ip);

        if ($ip_address!=$ip_single) {
            $found = true;
            break;
        } else {
            $found = false;
        }
    }

    if ($found==false) {
        $filename = 'count.txt';
        $handle = fopen($filename, 'r');
        $current = fread($handle, filesize($filename));
        fclose($handle);

        $current_inc = $current + 1;

        $handle = fopen($filename, 'w');
        fwrite($handle, $current_inc);
        fclose($handle);

        $handle = fopen('ip.txt', 'a');
        fwrite($handle, $ip_address."\n");
        fclose($handle);
    }
}