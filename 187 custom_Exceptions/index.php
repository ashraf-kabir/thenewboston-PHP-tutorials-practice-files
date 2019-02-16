<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 12/25/2018
 * Time: 1:48 PM
 */

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';
$mysql_db = 'testdb01';

class ServerException extends Exception {}
class DatabaseException extends Exception {}

try {
    if (!@mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db)) {
        throw new ServerException('Could not connect!');
    } else {
        echo 'CONNECTED!';
    }
} catch (ServerException $ex) {
    echo 'Error: '.$ex->getMessage();
} catch (DatabaseException $ex) {
    echo 'Error: '.$ex->getMessage();
}

// database has not yet created
// close look on mysqli_connect