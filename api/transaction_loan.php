<?php
include '../config/conn.php';
if (isset($_POST['event']) && $_POST['event'] == "pay_loan") {
    $username = $_COOKIE['username'];
    $rid = $_POST['retailerId'];
    $amount = $_POST['amount'];
    $amt = "-".$amount;
    $message = $_POST['message'];
    $status = "paid";
    $date_time = date("d-M-Y h:i:s A");
    if ($amount == "") {
      echo "400";
    }else{
    $sql = "INSERT INTO retailer_messages (userId, retailerId, status, amount, message, date_time)
    VALUES ('$username', '$rid', '$status', '$amt', '$message' ,'$date_time')";
if (mysqli_query($conn, $sql)) {
    echo "200";
  } else {
    echo "100";
  }
}
}

if (isset($_POST['event']) && $_POST['event'] == "add_loan") {
    $username = $_COOKIE['username'];
    $rid = $_POST['retailerId'];
    $amount = $_POST['amount'];
    $message = $_POST['message'];
    $status = "loan";
    $date_time = date("d-M-Y h:i:s A");
if ($amount == "") {
  echo "400";
}else{
    $sql = "INSERT INTO retailer_messages (userId, retailerId, status, amount, message, date_time)
    VALUES ('$username', '$rid', '$status', '$amount', '$message' ,'$date_time')";
    
if (mysqli_query($conn, $sql)) {
    echo "200";
  } else {
    echo "100";
  } 
}
}
CloseCon($conn);
?>