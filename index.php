<?php
include_once("config/config.php");
include("pages/header.php");



if (isset($_GET['loginSuccess'])) {
    include("pages/welcome.php");
} else {
    include("pages/form.php");
}






include("pages/footer.php");
echo "<br>";
$ans = random_int(0, 100);
// echo $ans;
