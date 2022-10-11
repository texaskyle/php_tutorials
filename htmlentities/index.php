<?php
$match = 123456;
if (!isset($_GET['submit'])) {
    echo "please click the submit button";
}else{
    if (!empty($_GET['username']) && !empty($_GET['email']) && !empty($_GET['password'])) {
        $username = ($_GET['username']) ;
        $email = ($_GET['email']);
        $password =($_GET['password']) ;

        if ($password != $match) {
            echo "enter the correct password";
        }else{
            echo "username: ".$username = $_GET['username']."<br>";
            echo "email: ".$email = $_GET['email']."<br>";
            echo "password: ".$password = $_GET['password']."<br>";
        }
    }else{
        echo "Enter all the fields";
    }
}


?>



<form action="index.php" method="GET">
username <input type="text" name="username"><br>
email  <input type="text" name="email"><br>
password <input type="password" name="password"><br>
    <input type="submit" name="submit"><br>
</form>

