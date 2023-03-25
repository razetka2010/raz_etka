<?php
$username = $_POST["username"];
$tel = $_POST["tel"];
$msg = $_POST["msg"];

if (empty($username)) {
    echo"пог";
} else{
    echo $username . "</br>";
    echo $tel . "</br>";
    echo $msg . "</br>";
}
?>