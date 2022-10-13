<?php
    $filename_or = "image.jpg";
    $uploaded_fname = rand().md5($filename_or).rand();
    echo $uploaded_fname."<br>";
    
    $filename_original = 'student.txt';
    if(file_exists($filename_original)) {
        echo "file already exist in the database";
    }else{
        $handle = fopen($filename_original, 'w');
         fwrite($handle, 'my name');
         fclose($handle);

        //  deleting a file in  the database
      
    }
echo "<br>";
    echo "<strong>delete files<br></strong>";
    $filetodelete = 'image.jpg';

    if (@unlink($filetodelete)) {
        echo "successfully deleted the file";
    }else{
        echo "file cannot be deleted";
    }
     
    echo "<br>";
    // renaming a file
    $filename_original = 'student.txt';
   $file_Rename_to = 'school'.rand().md5($filename_original).'.txt';
  if(rename($filename_original, $file_Rename_to)) {
    echo "you file has been rename to "."<strong>". $file_Rename_to."</strong>";
  }else{
    echo "error renaming";
  }
?>