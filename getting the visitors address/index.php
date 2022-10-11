<?php
require 'conf.php';


foreach ($ip_blocked as $ip) {
    // echo $ip."<br>";
    if ($ip == $ip_address) {
        die();
    }
}

?>
<h1>welcome to my page</h1>  