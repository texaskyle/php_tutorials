
<?php

// It checks the ip of the computer that is connected to the internet
$http_client_ip = $_SERVER['HTTP_CLIENT_IP'];

// checking if a user is using a proxy
$http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED FOR'];

// checking the ip address of the computer
$remote_addr = $_SERVER['REMOTE_ADDR'];

// checking the ip's using the if statement
if (!empty($http_client_ip)) {
    $ip_address = $http_client_ip;
}elseif (!empty($http_x_forwarded_for)) {
    $ip_address = $http_x_forwarded_for;
}else {
    $ip_address = $remote_addr;
}
echo "The ip address of the clients computer is".$ip_address;

?>
