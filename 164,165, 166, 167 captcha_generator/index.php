<?php
session_start();

if (!isset($_POST['secure'])) {
    $_SESSION['secure'] = rand(1000, 9999);
} else {
    if ($_SESSION['secure'] == $_POST['secure']) {
        echo 'A match!';
    } else {
        echo 'Incorrect, try again.';
        $_SESSION['secure'] = rand(1000, 9999);
    }
}

$_SESSION['secure'] = rand(1000, 9999);
?>
<img src="generate.php"><br><br>

<form action="index.php" method="post">
    Type the value you see:<input type="text" size="6" name="secure"> <input type="submit" value="submit">
</form>