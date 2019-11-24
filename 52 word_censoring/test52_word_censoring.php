<?php
if (isset($_POST['user_input']) && !empty($_POST['user_input'])) {
    $user_input = $_POST['user_input'];
}
?>

<hr>

<form action="test52_word_censoring.php" method="post">
    <textarea name="user_input" cols="30" rows="6"><?php echo $user_input;?></textarea><br><br>
    <input type="submit" value="Submit">
</form>
