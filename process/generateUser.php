<?php
include_once("../config/config.php");
include_once("../php/functions.php");
// echo "Hello";
if (1 > 0) {
    // echo "hi";
    global $con;
    // global $data;
    // print_r($_SESSION['data']);
    if ($_SESSION['data']['gift_to'] == 0) {  //$_SESSION['data']['gift_to'] == 0
        $ans = getRandomNumber();
        $uucms = $_SESSION['number'];
        // echo $uucms;
        $insertquery = "UPDATE `users` SET `gift_to` = '$ans' WHERE `users`.`uucms` = '$uucms';";
        $run = mysqli_query($con, $insertquery);
        echo "You have to give your gift to roll number:" . $ans;
        $_SESSION['data']['gift_to'] = $ans;
    } else {
        echo "You've already generated your pair :)";
        echo "<br>";
        echo "You have to give your gift to roll number:" . $_SESSION['data']['gift_to'];
    }
}
