<?php

$str1 = '    This     is     an     example    string.   ';
$str_trimmed = trim($str1);
//$str_trimmed = rtrim($str1);
//$str_trimmed = ltrim($str1);

echo $str_trimmed;
?>

<br>
<br>

<?php

$str2 = 'This is a <img src="image.jpg"> string.';
$str_slashes = htmlentities(addslashes($str2));

echo stripcslashes($str_slashes);
