<?php
/**
 * Created by PhpStorm.
 * User: sonnet
 * Date: 12/08/18
 * Time: 20:00
 */

$name = $_FILES['file']['name'];
//$size = $_FILES['file']['size'];
//$type = $_FILES['file']['type'];

$tmp_name = $_FILES['file']['tmp_name'];

if (isset($name)) {
    if (!empty($name)) {
        $location = 'uploads/';
        if (move_uploaded_file($tmp_name, $location . $name)) {
            echo 'Uploaded';
        } else {
            echo 'There was an error!';
        }
    } else {
        echo 'Please select a file';
    }
}

?>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file"><br><br>
    <input type="submit" value="Submit">
</form>
