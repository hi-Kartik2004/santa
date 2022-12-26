<?php
$username = 'root';
$password = " ";
$server = "localhost";
$database = "santa";

$con = mysqli_connect($server, $username, $password, $database);
if ($con) {
    // echo "success";
} else {
    echo ("Failed to connect with the database");
}
