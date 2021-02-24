<?php

$email = $_GET['form-email'];
$subject = $_GET['form-subject'];

    include "dbconnect.php";
	

if(mysqli_connect_error()){
	echo "Failed to connect to MYSQL".mysqli_connect_error();
	}
	
	$sql = "insert into teach ( Tcr_Email, Subject_Code, Time_Table ) values ('$email' , '$subject', '')";
	
	$result = mysqli_query($db,$sql);
	
	if($result){
		mysqli_commit($db);
		print '<script>alert("You are successfully sign up!");</script>';
		print '<script>window.location.assign("login-tc.php");</script>';
		}
		else
		{
			mysqli_rollback($db);
			print '<script>alert("Data is Invalid , No Record Been Added !");</script>';
			print '<script>window.location.assign("signup1.php");</script>';
			}
?>

