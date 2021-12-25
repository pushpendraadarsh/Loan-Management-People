<?php

    // $conn=mysqli_connect("localhost","root","");  
    // mysqli_select_db($conn,"mgkvp_result");
    
    $dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'loanmangementsystem'; 
    $timezone= date_default_timezone_set("Asia/Kolkata");
	$conn= mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

function CloseCon($conn)
 {
 $conn -> close();
 }
?>