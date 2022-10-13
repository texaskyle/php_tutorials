<?php
// file name that we want to read the files from
$filename = 'names2.txt';

$handle = fopen($filename, 'r');

// file that want to read
echo fread($handle, filesize($filename));

?>