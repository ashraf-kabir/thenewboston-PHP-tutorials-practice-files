<?php

$num = 1;
// if we change the value of $num, the output will be changed

switch ($num) {
    case 1:
        echo 'one';
        break;

    case 2:
        echo 'two';
        break;

    case 3:
        echo 'three';
        break;

    default:
        echo 'number not found';
        break;
}
?>
    <br><br>

<?php
$day = 'Sunday';

switch ($day) {
    case 'Saturday':
    case 'Sunday':
        echo 'It\'s a weekend';
        break;

    default:
        echo 'Not a weekend';
        break;
}
?>