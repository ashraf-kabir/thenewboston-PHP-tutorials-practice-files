<?php
/**
 * Created by PhpStorm.
 * User: sonnet
 * Date: 12/08/18
 * Time: 10:45
 */

$directory = 'files';

if ($handle = opendir($directory.'/')) {
    echo 'Looking inside \''.$directory.'\':<br>';

    while ($file = readdir($handle)) {
        if ($file != '.' && $file!='..') {
            echo '<a href="'.$directory.'/'.$file.'">'.$file.'</a><br>';
        }
    }

}