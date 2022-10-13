<?php
// creating a file
$create_file = fopen('school_files.txt', 'w');
fwrite($create_file, 'evans'."\n");
$write_on_file = fopen('school_files.txt', 'a');
fwrite($write_on_file,'kiarie'."\n");
fclose($create_file);



// specifing the directory
$directory = 'files';

// creating a loop to check whether the loop exist
if ($handle = opendir($directory.'/')){
    echo 'looking inside '."'".$directory."/'";
    
    while ($file = readdir($handle)) {
        echo $file.'<br>';
    }
}

?>