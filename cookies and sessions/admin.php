
<?php
require_once 'header.php';

echo "<strong><h1>Admin dashbord</h1></strong>";

// echo $_SESSION['username'];
// $_SESSION['userID'] == 'a';
if (isset($_SESSION['userAdmin']) ) {
    echo '<form action="admin.php" method="POST">
        <input type="text" name="username"><br>
        <input type="password" name="password">
        <button type="submit" name="adminSubmit" >submit</button>
    </form>';

    if(!isset($_POST['adminSubmit'])){
        echo "plese click the admin submit button";
       
   }else{
       $username =$_POST['username'];
       if ($username !== 'admin') {
           echo "you are not an admin";
       }else{
           echo "You are the admin of this webiste";
       }
   }
}





?>
