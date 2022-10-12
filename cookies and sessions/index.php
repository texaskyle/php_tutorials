<?php
require_once 'header.php';

 $_SESSION['userAdmin']  = 'admin';
  
 $_SESSION['userUser'] = 'evans';

//  setting an email
echo '<h1>email address</h1>';
echo '<form action="view.php" method="POST">
<input type="text" name="email">
<button type="submit" name="setEmail">submit email</button>
</form>';





 
?>
<h1>this is the index page</h1>



<h1> <u>signup form</u> </h1>

<form action="index.php" method="POST">
    <input type="text" name="username"><br>
    <input type="text" name="fname"><br>
    <input type="text" name="lname"><br>
    <input type="text" name="email"><br>
    <input type="password" name="password"><br>
<button type="submit" name="submit" >submit</button>


