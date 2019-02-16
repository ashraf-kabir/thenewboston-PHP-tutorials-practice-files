<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 12/25/2018
 * Time: 12:46 PM
 */

$con = mysqli_connect("localhost", "root", "", "testajax02");

if (isset($_POST['text'])) {
    $text = $_POST['text'];
    if (!empty($text)) {
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        if ($con) {
            $query = "INSERT INTO `data` VALUES ('', '" . mysqli_real_escape_string($con, $text) . "')";
            if ($query_run = mysqli_query($con, $query)) {
                echo 'Data successfully INSERTED!';
            } else {
                echo 'Data insertion FAILED!';
            }
        }
    } else {
        echo 'Please type something and try again!';
    }
}
