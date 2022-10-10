<?php
 $offset = 0;

if (!isset($_POST['findAndReplace'])) {
    echo "click the submit button";
    header("Location: index.php");
}else{
    if (!empty($_POST['text']) && !empty($_POST['searchfor']) && !empty($_POST['replaceWith'])) {   
          // taking the input data from the submitted form
           $text = $_POST['text'];
           $searchfor = $_POST['searchfor'];
           $replaceWith = $_POST['replaceWith'];

          $strlength = strlen($searchfor);

        //   a while loop to loop into the string and find the string search
        while ($strPosition=strpos($text,$searchfor, $offset)) {
             $offset = $strPosition + $strlength;
             $updateText = substr_replace($text, $replaceWith, $strPosition, $strlength);
        }
        echo $updateText;

    }else {
        echo "<strong>fill in all the fields</strong>"."<br>";

          
            
        }
    }

?>
  
    <hr>

<form action="index.php" method="POST">
    
comments: <br>
<textarea name="text" id="" cols="30" rows="10" placeholder="Enter your comments here">

     
    
    </textarea><br>
    search for: <br>
    <input type="text" name="searchfor" ><br><br>
    replace with: <br>

    <input type="text" name="replaceWith" ><br><br>
    <input type="submit" name="findAndReplace">
</form>
    
