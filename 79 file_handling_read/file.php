<?php
/**
 * Created by PhpStorm.
 * User: sonnet
 * Date: 11/08/18
 * Time: 11:53
 */

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    if (!empty($name)) {
        $handle = fopen('names.txt','a');
        fwrite($handle,$name."\n");
        fclose($handle);

        echo 'Current names in the file: ';

        $count = 1;
        $readin = file('names.txt');
        $readin_count= count($readin);

        foreach ($readin as $fname) {
            echo trim($fname);
            if ($count<$readin_count) {
                echo ', ';
            }
            $count++;
        }
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
