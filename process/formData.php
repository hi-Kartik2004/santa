<?php
include_once("../php/functions.php");

if (1 > 0) {
    // global loginRequest;
    $uucms = $_POST['uucms'];
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    loginRequest($uucms, $name, $dob);
}
