<a href="anotherpage.php">anotherpage</a>
<?php
echo "<h1>index.php</h1>";
$cookie_name ='username';
$cookie_value = 'evans';
setcookie($cookie_name, $cookie_value, time()+60, "/");
 setcookie($cookie_name, $cookie_value, time()-60, "/");


?>