<?php
include '../config/conn.php';
    $date= date("d F Y");
    $time= date("h:i:s A");
    $data = array(
        'date'  => $date,
        'time'  => $time
    );
    echo json_encode($data);
 ?>