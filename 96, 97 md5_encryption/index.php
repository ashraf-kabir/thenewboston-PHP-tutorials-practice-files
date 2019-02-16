<?php
/**
 * Created by PhpStorm.
 * User: sonnet
 * Date: 16/08/18
 * Time: 20:57
 */

if (isset($_POST['user_password'])) {
    if (!empty($_POST['user_password'])) {

        $user_password = md5($_POST['user_password']);

        $filename = 'hash.txt';

        $handle = fopen($filename, 'r');
        $file_password = fread($handle, filesize($filename));

        if ($user_password==$file_password) {
            echo 'Password ok';
        } else {
            echo 'Incorrect password';
        }

    } else {
        echo 'Please enter a password';
    }
}

?>

<form action="index.php" method="post">
    Password: <input type="text" name="user_password"><br><br>
    <input type="submit" value="Submit">
</form>
