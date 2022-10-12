<?php
require 'index.php';

if (!isset($_COOKIE[$cookie_name]) && !isset($_COOKIE[$cookie_value])) {
    echo "no cookie has been set in this website";
}else {
    echo $cookie_name."<br>";
    echo $cookie_value;
}
?>