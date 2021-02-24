<?php

$email = $_GET['form-email'];
$subject = $_GET['form-subject'];

    include "dbconnect.php";
	

if(mysqli_connect_error()){
	echo "Failed to connect to MYSQL".mysqli_connect_error();
	}
	
	$sql = "insert into learn ( Stu_Email, Subject_Code, Time_Table ) values ('$email' , '$subject', '')";
	
	$result = mysqli_query($db,$sql);
	
	if($result){
		mysqli_commit($db);
		print '<script>alert("You are successfully register subject!");</script>';
		print '<script>window.location.assign("main-stu.php?form-email='.$email.'");</script>';
		}
		else
		{
			mysqli_rollback($db);
			print '<script>alert("Data is Invalid , No Record Been Added !");</script>';
			print '<script>window.location.assign("main-stu.php?form-email='.$email.'");</script>';
			}
?>

