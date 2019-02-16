<?php
/**
 * Created by PhpStorm.
 * User: sonnet
 * Date: 11/08/18
 * Time: 12:29
 */

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    if (!empty($name)) {
        $handle = fopen('names.txt','a');
        fwrite($handle, $name."\n");
        fclose($handle);
    } else {
        echo 'Please type a name';
    }
}

?>

<form action="file.php" method="post">
    Name:<br>
    <input type="text" name="name"><br><br>
    <input type="submit" value="Submit">
</form>
