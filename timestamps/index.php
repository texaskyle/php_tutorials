<?php
// to show the current time
$time = time();
 $actual_time = date('H:i:s', $time);
echo "The current time is : ". $actual_time;
$actualDateAndTime = date('D M Y d m y @ H:i:s', time());
echo "<br>";
echo "The current date and time is".$actualDateAndTime; 
echo "<br>";

// time modified to print the actual time at my place
$timeModified = date('D M Y d m y @ H:i:s',time()+60*60*24*7);
echo $timeModified;
echo "<br>";

// strings can also be used to modify timestamp
echo $weekEarlier =date('d m y @ H:i:s', strtotime('-1 week 1 hour 1 min'));
?>