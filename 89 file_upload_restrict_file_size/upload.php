<?php
/**
 * Created by PhpStorm.
 * User: sonnet
 * Date: 15/08/18
 * Time: 13:24
 */

$name = $_FILES['file']['name'];
$extension = strtolower(substr($name, strpos($name, '.')+1));
$type = $_FILES['file']['type'];

$size = $_FILES['file']['size'];
$max_size = 2097152;

$tmp_name = $_FILES['file']['tmp_name'];

if (isset($name)) {
    if (!empty($name)) {
        if (($extension=='jpg' || $extension='jpeg') && ($type=='image/jpg' || $type=='image/jpeg') && $size<=$max_size) {
            $location = 'uploads/';
            if (move_uploaded_file($tmp_name, $location.$name)) {
                echo 'Uploaded';
            } else {
                echo 'There was an error!';
            }
        } else {
            echo 'File must be jpg/jpeg & must be 2MB or less';
        }
    } else {
        echo 'Please choose a file';
    }
}

?>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file"><br><br>
    <input type="submit" value="Submit">
</form>
