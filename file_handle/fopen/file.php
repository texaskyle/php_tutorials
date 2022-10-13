<?php
// opens a new file named "names.txt" which is a write file
    $handle = fopen('names.txt', 'w');

    // fwrite function writes content on the file that has been created
    fwrite($handle, 'evans'."\n");
    fwrite($handle, 'kiarie');

    // it is always good to close the file
    fclose($handle);

 
    ?>


<?php

    // creating a write file
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    if (!empty($_POST['name'])) {
        $handle = fopen('names2.txt', 'a');
        fwrite($handle, $name."\n");
        fclose($handle);

        $fnames = file('names2.txt');
        foreach ($fnames as $names) {
            
            echo $names.",";
        }

    }else{
        echo "fill in the field name";
    }
  }
    

?>
<form action="file.php" method="POST">
  name  <input type="text" name="name">
  <input type="submit" name="submit">
</form>

<?php
echo "<strong><u>using fread to read the files</strong></u><br>";
// file name that we want to read the files from
$filename = 'names2.txt';

$handle = fopen($filename, 'r');

// file that want to read
 
 $datain =fread($handle, filesize($filename));
 $name_array = explode('. ', $datain );
 foreach ($name_array as $name) {
  echo $name;
 }
?>

