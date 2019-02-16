<?php

if (isset($_GET['day']) && isset($_GET['month']) && isset($_GET['year'])) {
    $day = htmlentities($_GET['day']);
    $month = htmlentities($_GET['month']);
    $year = htmlentities($_GET['year']);
    if (!empty($day) && !empty($month) && !empty($year)) {
        echo 'It is '.$day.' '.$month.', '.$year;
    } else {
        echo 'Fill in all field';
    }
}

?>

<form action="test69%20working%20with%20GET.php" method="get">
    Day:<br><input type="text" name="day"><br>
    month:<br><input type="text" name="month"><br>
    Year:<br><input type="text" name="year"><br><br>
    <br><input type="submit" value="Submit">
</form>
