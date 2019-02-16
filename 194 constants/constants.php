<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 12/26/2018
 * Time: 1:05 PM
 */

class Circle {
    const pi = 3.1415;

    public function Area($radius) {
        return self::pi * ($radius * $radius);
    }
}
$circle = new Circle;
//echo $circle::pi;

//echo Circle::pi;

echo $circle->Area(100);