<?php
ob_start();
?>

<h1>My Page</h1>
This is my page

<?php
$redirect_page = 'http://www.google.com';
$redirect = false;

if ($redirect == true) {
    header('Location: '.$redirect_page);
}
ob_end_flush();
//ob_end_clean();
?>
