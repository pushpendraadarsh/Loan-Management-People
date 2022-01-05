<?php
include '../config/conn.php';
session_start();
if (isset($_POST['event']) && $_POST['event'] == "retailer_message_list" || isset($_GET['event']) && $_GET['event'] == "retailer_message_list") {
    $username = $_COOKIE['username'];
    $retailerId = $_POST['retailerId'];

    $sql= "SELECT * FROM retailer_messages WHERE userId='$username' && retailerId='$retailerId' ORDER BY id ASC";
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0) {

          $sql2= "SELECT SUM(amount) AS loan_amount_sum FROM retailer_messages WHERE userId='$username' && retailerId='$retailerId' ORDER BY id ASC";
          $result2 = mysqli_query($conn,$sql2);
          $row2 = mysqli_fetch_assoc($result2);
          $overall_loan_amount = $row2['loan_amount_sum'];

          $sql3= "SELECT * FROM retailer_list WHERE userId='$username' && retailerId='$retailerId'";
          $result34 = mysqli_query($conn,$sql3);
          $result3 = mysqli_fetch_assoc($result34);
          $name = $result3['retailer_name'];
          $image = $result3['retailer_image'];
          $mobile_no = $result3['mobile_no'];
            $someArray = [];
            array_push($someArray, [
                'status'  => "200",
                'loan_amount' => $overall_loan_amount,
                'name' =>$name,
                'image' =>$image,
                'mobile_no' =>$mobile_no
            ]);
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($someArray, [
            'payment_status'   => $row['status'],
            'amount'   => $row['amount'],
            'message'   => $row['message'],
            'date_time'   => $row['date_time']
          ]);
    }
    $someJSON = json_encode($someArray);
    echo $someJSON;
} else {
    $status= "100";
$data = array("status"=>$status);
echo json_encode($data);
}
}
CloseCon($conn);
?>