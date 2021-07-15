<?php
$server = "localhost";
$username = "root";
$password = "root";
$db = "project";

$conn = mysqli_connect($server, $username, $password, $db);
    
if(mysqli_connect_errno())
{
    echo "Failed to connect to Mysql : " . mysqli_connect_error();
    exit();
}
