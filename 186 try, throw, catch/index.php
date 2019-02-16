<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 12/25/2018
 * Time: 1:42 PM
 */

$age = 17;

try {
    if ($age >= 18) {
        echo 'You are old enough.';
    } else {
        throw new Exception('Not old enough!');
    }
} catch (Exception $ex) {
    echo 'Error: ' . $ex->getMessage();
}
