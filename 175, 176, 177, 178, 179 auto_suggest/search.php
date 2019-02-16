<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 12/24/2018
 * Time: 2:03 PM
 */

if (isset($_GET['search_text'])) {
    $search_text = $_GET['search_text'];
}

if (!empty($search_text)) {
    $con = mysqli_connect("localhost", "root", "", "testajax");

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    if ($con) {
        $query = "SELECT `name` FROM `names` WHERE `name` LIKE '" . mysqli_real_escape_string($con, $search_text) . "%'";
        $query_run = mysqli_query($con, $query);

        while ($query_row = mysqli_fetch_assoc($query_run)) {
            echo $name = $query_row['name'] . '<br>';
        }
    }

}
