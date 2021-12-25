<?php 
include '../config/conn.php';
if (isset($_POST['event']) && $_POST['event'] == "loan_summary" && $_POST['loan_summary'] == true ) {
    $username = $_COOKIE['username'];
    $sql = "SELECT SUM(amount) AS loan_due_amount_sum FROM retailer_messages WHERE userId='$username' ORDER BY id DESC";
    $result = mysqli_query($conn,$sql);
    $sql4 = "SELECT COUNT(retailerId) AS all_no_retailer FROM retailer_list WHERE userId='$username'";
    $result4 = mysqli_query($conn,$sql4);
    $sql5 = "SELECT * FROM retailer_messages WHERE userId='$username' && status='paid' ORDER BY id DESC";
    $result5 = mysqli_query($conn,$sql5);
    $row5 = mysqli_fetch_assoc($result5);
    $someArray = [];
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $row4 = mysqli_fetch_assoc($result4);

    array_push($someArray, [
        'dues_amount' => $row['loan_due_amount_sum'],
        'last_payment' => "Name: (".$row5['retailerId'].") Amount: (".$row5['amount'].") Date: (".$row5['date_time'].")",
        'active_merchant' => $row4['all_no_retailer'],
        'status'  => "200"

    ]);
    //find each retailer loan
$sql2 = "SELECT * FROM retailer_list WHERE userId='$username'";
        $result2 = mysqli_query($conn,$sql2);
while ($data = mysqli_fetch_assoc($result2)) {
      $rd = $data['retailerId'];
      $sql3= "SELECT SUM(amount) AS loan_amount_sum FROM retailer_messages WHERE userId='$username' && retailerId='$rd'";
      $result3 = mysqli_query($conn,$sql3);
      $row3 = mysqli_fetch_assoc($result3);
      $amount = $row3['loan_amount_sum'];
      if ($amount > 0) {
      array_push($someArray, [
          'retailer'  => $rd
      ]);
  }
}
} else {
    array_push($someArray, [
        'status'  => "100"//No data Found!!
    ]);
  }
  $someJSON = json_encode($someArray);
  echo $someJSON;
  }else{
      echo "hi";
  }
  CloseCon($conn);
?>