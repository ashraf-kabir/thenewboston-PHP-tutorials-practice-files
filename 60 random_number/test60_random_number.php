<?php

if (isset($_POST['roll'])) {
    $rand = rand(1, 6);
    echo 'You have rolled a '.$rand;
}

?>

<form action="test60%20random%20number.php" method="post">
    <input type="submit" name="roll" value="Roll dice">
</form>
