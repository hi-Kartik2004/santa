<?php
include_once("config/config.php");
function LoginUser($uucms, $name, $dob)
{
    global $con;
    $fetchQuery = "SELECT * FROM `users` WHERE uucms = $uucms;";
    $run = mysqli_query($con, $fetchQuery);
    print_r($run);
}
