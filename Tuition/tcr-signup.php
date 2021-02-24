<?php

	$name = $_GET['form-name'];
	$ic = $_GET['form-ic'];
	$email = $_GET['form-email'];
	$pass = $_GET['form-password'];
	$status = $_GET['form-status'];
	$address = $_GET['form-address'];
	$phoneHp = $_GET['form-phoneMobile'];

    include "dbconnect.php";
	

if(mysqli_connect_error()){
	echo "Failed to connect to MYSQL".mysqli_connect_error();
	}
	
	$sql = "insert into teacher ( Tcr_Email , Tcr_Password , Tcr_IC , Tcr_Name, Tcr_Status, Tcr_Address, Tcr_TelNum ) values ('$email' , '$pass', '$ic' , '$name' , '$status', '$address' ,'$phoneHp' )";
	
	$result = mysqli_query($db,$sql);
	
	if($result){
		mysqli_commit($db);
		print '<script>alert("Please enter your subject!");</script>';
		print '<script>window.location.assign("subject-signup.php?form-email='.$email.'");</script>';
		}
		else
		{
			mysqli_rollback($db);
			print '<script>alert("Data is Invalid , No Record Been Added !");</script>';
			print '<script>window.location.assign("signup1.php");</script>';
			}
?>

