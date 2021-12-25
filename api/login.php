<?php
include '../config/conn.php';
if (isset($_POST['username']) && $_POST['event'] == "username") {
    $username = md5($_POST['username']);
     $sql = "SELECT * FROM login_assets WHERE username = '$username'";
     $result = mysqli_query($conn,$sql);

     if (mysqli_num_rows($result) > 0) {
        setcookie("username", $username, time() + (86400 * 30), "/"); // 86400 = 1 day
         echo 200;
     }else{
         echo 100;
     }
}
if (isset($_POST['password'])  && $_POST['event'] == "login") {
    $username = $_COOKIE['username'];
    $password = md5($_POST['password']);
    $timestamp = md5(date("d-M-Y  H:i:s"));
    $sql = "SELECT * FROM login_assets WHERE username = '$username' && password = '$password'";
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0) {
        setcookie("unlock", $timestamp, time() + (86400 * 30), "/"); // 86400 = 1 day
    echo 200;
    }else{
        echo 100;
    }
}
CloseCon($conn);
?>