<?php

$str1 = 'Sonnet is a student of BRAC University. He lives in Dhaka. He is a programmer and a proactive person.';
$str2 = 'My essay is about Sonnet. He is a student of CSE at BRAC University. Moreover, he lives in Dhaka & also a proactive & a programmer.';

echo "First text is: <br><em>".$str1."</em><br><br>";
echo "Second text is: <br><em>".$str2."</em><br><br><br>";

similar_text($str1, $str2, $result);
echo 'The similarity is <b>'.$result.'%</b>';

?>
    <br><br>
<?php

$str3 = 'This is an example string.';
$str_length = strlen($str3);

echo 'The length of the string("'.$str3.'") is '.$str_length;
