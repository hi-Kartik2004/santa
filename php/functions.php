<?php
include_once("../config/config.php");
session_start();
function loginRequest($uucms, $name, $dob)
{
    global $con;
    $fetchQuery = "SELECT * FROM `users` WHERE uucms = '$uucms';";
    $run = mysqli_query($con, $fetchQuery);
    $data = mysqli_fetch_assoc($run);
    $_SESSION['data'] = $data;
    if ($uucms != $data['uucms']) {
        $_SESSION['err_msg'] = "Incorrect KCET Number";
        echo $_SESSION['err_msg'];
        return 0;
    } else if ($name != $data['name']) {
        // $_SESSION['err_msg'] = "Incorrect First name";
    } else if ($dob != $data['dob']) {
        $_SESSION['err_msg'] = "Incorrect DOB";
        echo $_SESSION['err_msg'];
        return 0;
    } else {
        $_SESSION['name'] = $name;
        $_SESSION['dob'] = $dob;
        $_SESSION['number'] = $uucms;
        // $_SESSION['gift_to'] = $gift_to;
        header("location:../index.php?loginSuccess");
    }
    print_r($data);
}


function getRandomNumber()
{
    global $con;
    $minus_students = array();
    $num_records = "SELECT `gift_to` FROM `selected` WHERE sno > 0;";
    $run = mysqli_query($con, $num_records);
    $record = mysqli_fetch_all($run);
    // mysqli_free_result($record);
    $record_count = mysqli_num_rows($run);
    echo $record_count;
    if ($record_count == 61) {
        return 0;
    }
    print_r($record);
    // while ($record_count--) {

    //     array_push($minus_students, $record);
    //     // echo "$value <br>";

    //     // print_r($record);
    // }
    do {
        $n = mt_rand(1, 62);
    } while (in_array($n, $record));
    $userRoll = $_SESSION['data']['roll_no'];
    $sqlquery = "INSERT INTO `selected` (`gift_from`, `gift_to`, `dt`) VALUES ('$userRoll', '$n', current_timestamp());";
    $run = mysqli_query($con, $sqlquery);
    // array_push($minus, $n);
    // print_r($minus_students);
    return $n;
}
