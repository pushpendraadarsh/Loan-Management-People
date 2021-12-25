<?php
include '../config/conn.php';
if (isset($_POST['event']) && $_POST['event'] == "add_merchant") {
    $userId = $_COOKIE['username'];
    $retailerId = $_POST['retailerId'];
    $retailer_name = $_POST['retailer_name'];
    $retailerImage = $_POST['retailerImage'];
    $retailerAbout = $_POST['retailerAbout'];
    $date_time = date("d-M-Y h:i:s A");
     if ($retailerId == "" || $retailer_name == "" || $retailerAbout == "") {
         echo "250";
    }else{
    $sql1= "SELECT * FROM retailer_list WHERE retailerId='$retailerId'";
    $result1 = mysqli_query($conn,$sql1);
    if (mysqli_num_rows($result1) > 0) {
        echo "300";//dublicate data
    }else {
    $sql = "INSERT INTO retailer_list (userId, retailerId, retailer_name, retailer_image, retailer_about, date_time)
            VALUES ('$userId', '$retailerId', '$retailer_name', '$retailerImage', '$retailerAbout' ,'$date_time')";
            if (mysqli_query($conn, $sql)) {
                echo "200";
              } else {
                echo "100";
              }
            }
        }
}
CloseCon($conn);
?>