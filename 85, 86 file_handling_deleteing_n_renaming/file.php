<?php
/**
 * Created by PhpStorm.
 * User: sonnet
 * Date: 12/08/18
 * Time: 17:19
 */

/*
$filename = 'filetodelete.txt';

if (@unlink($filename)) {
    echo 'File <strong>'.$filename.'</strong> has been deleted!';
} else {
    echo 'File cannot be deleted!';
}
*/

$filename = 'filetorename.txt';

$rand = rand(10000, 99999);

if (rename($filename, $rand.'.txt')) {
    echo 'File <strong>'.$filename.'</strong> has been renamed to <strong>'.$rand.'.txt</strong>';
} else {
    echo 'File cannot be renamed!';
}

// make sure you really want to rename