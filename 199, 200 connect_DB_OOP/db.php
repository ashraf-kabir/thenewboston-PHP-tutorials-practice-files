<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 12/26/2018
 * Time: 7:59 PM
 */

class DatabaseConnect {
    public function __construct($db_host, $db_username, $db_password, $db_name) {
        echo 'Attempting connection...';
        if (!@$this->Connect($db_host, $db_username, $db_password, $db_name)) {
            echo 'Connection failed';
        } else if ($this->Connect($db_host, $db_username, $db_password, $db_name)) {
            echo 'Connected to '.$db_host;
        }
    }
    public function Connect($db_host, $db_username, $db_password, $db_name) {
        if (!mysqli_connect($db_host, $db_username, $db_password, $db_name)) {
            return false;
        } else {
            return true;
        }
    }
}

$connection = new DatabaseConnect('localhost','root','','testdb001');
