

<?php
require_once 'header.php';


echo "<strong><h1>users dashbord</h1></strong>";

if (isset($_SESSION['userUser']) ) {
    echo'<form action="users.php" method="POST">
    <input type="text" name="username"><br>
    <input type="text" name="fname"><br>
    <input type="text" name="lname"><br>
    <input type="text" name="email"><br>
    <input type="password" name="password"><br>
<button type="submit" name="userSubmit" >submit</button>
</form>';

if(!isset($_POST['userSubmit'])){
    echo "<strong>click the button!!</strong>";
   
}else{
   $username =$_POST['username'];
   if ($username !== 'evans') {
       echo "you are a new user ".$username;
   }else{
       echo "welcome evans to my site";
   }
}

}