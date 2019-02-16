<?php

$n1 = 7;
$n2 = 8;

function add($num1, $num2) {
    echo $num1+$num2;
}

add($n1, $n2);

?>
<br><br>

<?php

function displayDate($day, $date, $year) {
    echo $day.' '.$date.' '.$year;
}

displayDate('Monday', 23, 2018);
