<?php
header('Cache-Control: no-cache, must-revalidate');
include '../config/conn.php';
session_start();
if (isset($_POST['event']) && $_POST['event'] == "retailer_list" || isset($_GET['event']) && $_GET['event'] == "retailer_list") {
    $username = $_COOKIE['username'];
    $sql= "SELECT * FROM retailer_list WHERE userId='$username' ORDER BY id ASC";
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0) {
            $someArray = [];
            array_push($someArray, [
                'status'  => "200",
            ]);
        
    while ($row = mysqli_fetch_assoc($result)) {
            array_push($someArray, [
                'id' =>$row['retailerId'],
                    'name'   => $row['retailer_name'],
                    'image'   => $row['retailer_image'],
                    'retailerId'   => $row['retailerId'],
                    'about'   => $row['retailer_about'],
                  ]);
            }
            $someJSON = json_encode($someArray);
echo $someJSON;
    }else {
            $status= "100";
    $data = array("status"=>$status);
    echo json_encode($data);
    }
}

    if (isset($_POST['event']) && $_POST['event'] == "retailer_detail" || isset($_GET['event']) && $_GET['event'] == "retailer_detail") {
        $username = $_COOKIE['username'];
        $rId = $_POST['retailerId'];
        $sql= "SELECT * FROM retailer_list WHERE userId='$username' && retailerId='$rId'";
        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $data = array(
                    'status'  => "200",
                    'name'   => $row['retailer_name'],
                        'image'   => $row['retailer_image'],
                        'retailerId'   => $row['retailerId'],
                        'about'   => $row['retailer_about']
                );
                echo json_encode($data);
            }
            
        else {
                $status= "100";
        $data = array("status"=>$status);
        echo json_encode($data);
        }
    }
CloseCon($conn);
?>