
<?php

$email = $_POST['form-email'];
$pass = $_POST['form-password'];

    include "dbconnect.php";
	

if(mysqli_connect_error()){
	echo "Failed to connect to MYSQL".mysqli_connect_error();
	}
	
	$sql = "select * from staff where Staff_Email='$email' AND Staff_Password='$pass'";
	
	$result = mysqli_query($db,$sql);

	$row = mysqli_fetch_array($result);
	
	if($row['Staff_Email'] == $email && $row['Staff_Password'] == $pass){
		mysqli_commit($db);
		print '<script>alert("You are successfully login!");</script>';
		print '<script>window.location.assign("admin/home-page.php?form-email='.$email.'");</script>';
		}
		else
		{
			mysqli_rollback($db);
			print '<script>alert("Wrong Email and Password!");</script>';
			print '<script>window.location.assign("login-adm.php");</script>';
			}
?>

