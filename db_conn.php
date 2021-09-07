<?php
$host="localhost";
$user= "root";
$password = "";

$db_name = "trial-user";

$conn = mysqli_connect($host, $user, $password, $db_name);

if(!$conn) {
    echo "Connection failed";
}
?>