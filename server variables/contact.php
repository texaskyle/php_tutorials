<a href="index.php">contact</a>


<?php 
include_once 'form.php'; 

if (isset($_POST['submit'])) {
    echo "This is the contact page";
}else {
    echo "click the submit button";
}
?> 