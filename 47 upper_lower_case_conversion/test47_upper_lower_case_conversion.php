<?php

/**
 * $str1 = 'I could be any case';
 * $str_lower = strtolower($str1);
 * $str_upper = strtoupper($str1);
 * echo $str_lower.'<br>';
 * echo '<br>'.$str_upper.'<br><br><br><br>';
**/

if (isset($_GET['user_name'])&& !empty($_GET['user_name'])) {
    $user_name = $_GET['user_name'];
    $user_name_lc = strtolower($user_name);

    if ($user_name_lc == 'sonnet') {
        echo 'You are the best, '.$user_name.'.';
    }
}

?>

<form action="test47_upper_lower_case_conversion.php" method="GET">
    Name: <input type="text" name="user_name"><br><br>
    <input type="submit" value="Submit">
</form>
