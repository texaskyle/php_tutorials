<?php

$currentTime = time();
echo "<br>";
echo $currentTime;
echo "<br>";
$fiveDaysAfter = $currentTime *5*24*60*60;
echo "The day today is " .date('d/m/y/l ');
echo "<br>";
echo "The time is ".date('h:ia');
echo date_default_timezone_get();

echo "my name is daniel";
