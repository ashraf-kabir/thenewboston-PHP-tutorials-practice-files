<?php
/**
 * Created by PhpStorm.
 * User: sonnet
 * Date: 17/08/18
 * Time: 10:20
 */

$to = '766638@gmail.com';
$subject = 'Email Subject';
$body = 'This is a test email'."\n\n".'Nothing else';
$headers = 'From: Ashraf Kabir <sonnet404@gmail.com>';

if (mail($to, $subject, $body, $headers)) {
    echo 'Email has been sent to'.$to;
} else {
    echo 'There was an error sending the email.';
}
