<h1>form</h1>
 
<form action="form.php" method="GET">
    <input type="text" name="fname">
    <button type="submit" name="submit" >submit</button>
 </form>

<?php

if(!isset($_GET['submit'])) {
    echo "please click the submit button";
}else{
    if (empty($_GET['fname'])) {
        echo "fill the input form";
    }else{
        $firstname = $_GET['fname'];
        $firstnametolower = strtolower($firstname);
        if ($firstnametolower == 'evans') {
            echo "you have a bright future ".$_GET['fname'];
        }else{
            echo "nice name ".$_GET['fname'];
        }
    }
}
?>