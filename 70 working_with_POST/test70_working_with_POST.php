<?php

$match = 'pass123';

if (isset($_POST['password'])) {
    $password = $_POST['password'];
    if (!empty($password)) {
        if ($password == $match) {
            echo 'That is correct!';
        } else {
            echo 'That is incorrect!';
        }
    } else {
        echo 'Please enter a password.';
    }
}

?>

<form action="test70%20working%20with%20POST.php" method="post">
    Password:<br>
    <input type="password" name="password"><br><br>
    <input type="submit" value="Submit">
</form>
