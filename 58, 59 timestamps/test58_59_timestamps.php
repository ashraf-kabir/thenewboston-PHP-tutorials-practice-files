<?php

$time = time();

//$actual_time = date('H:i:s', $time);
$time_now = date('d M y @ h:i:s', $time);
//$time_now = date('d.m.y @ h:i:s', $time);
//$time_modified = date('d M y @ h:i:s', $time-60);
//$time_modified = date('d M y @ h:i:s', strtotime('+1 week 2 hours 30 seconds'));
$time_modified = date('d M y @ h:i:s', $time-(7+2+30+30));

echo 'The time now is '.$time_now.'<br>The time modified is '.$time_modified;
