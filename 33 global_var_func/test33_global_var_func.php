<?php

$user_ip = $_SERVER['REMOTE_ADDR'];

//echo $str = 'Your localhost is: '.$user_ip;

function echo_ip() {
    global $user_ip;
    $str = 'Your localhost is: '.$user_ip;
    echo $str;
}

echo_ip();