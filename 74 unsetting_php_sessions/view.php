<?php
/**
 * Created by PhpStorm.
 * User: sonnet
 * Date: 10/08/18
 * Time: 22:20
 */

session_start();

if (isset($_SESSION['username']) && isset($_SESSION['age'])) {
    echo 'Welcome, '.$_SESSION['username'].'. You are '.$_SESSION['age'].'.';
} else {
    echo 'Please Log in';
}

?>