<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 12/25/2018
 * Time: 1:37 PM
 */

function divide($num1, $num2) {
    if ($num1 == 0) {
        throw new Exception('Cannot divide by ZERO');
    } else {
        return $num1/$num2;
    }
}

echo divide(10, 5.2);