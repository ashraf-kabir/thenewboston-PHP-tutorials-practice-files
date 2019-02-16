<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 12/26/2018
 * Time: 1:19 PM
 */

class Example {

    public function __construct($something) {
        $this->SaySomething($something);
    }

    public function SaySomething($something) {
        echo $something;
    }

}

$example = new Example('Hello World');
