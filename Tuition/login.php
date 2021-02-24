
<?php

$email = $_POST['form-email'];
$pass = $_POST['form-password'];

    include "dbconnect.php";
	

if(mysqli_connect_error()){
	echo "Failed to connect to MYSQL".mysqli_connect_error();
	}
	
	$sql = "select * from student where Stu_Email='$email' AND Stu_Password='$pass'";
	
	$result = mysqli_query($db,$sql);

	$row = mysqli_fetch_array($result);
	
	if($row['Stu_Email'] == $email && $row['Stu_Password'] == $pass){
		mysqli_commit($db);
		print '<script>alert("You are successfully login!");</script>';
		print '<script>window.location.assign("student/home-page.php?form-email='.$email.'");</script>';
		}
		else
		{
			mysqli_rollback($db);
			print '<script>alert("Wrong Email and Password!");</script>';
			print '<script>window.location.assign("login-stu.php");</script>';
			}
?>

