
<?php

$name = $_POST['form-name'];
$ic = $_POST['form-ic'];
$email = $_POST['form-email'];
$pass = $_POST['form-password'];
$gender = $_POST['form-gender'];
$school = $_POST['form-school'];
$address = $_POST['form-address'];
$category = $_POST['form-category'];
$phoneH = $_POST['form-phoneHome'];
$phoneHp = $_POST['form-phoneMobile'];

    include "dbconnect.php";
	

if(mysqli_connect_error()){
	echo "Failed to connect to MYSQL".mysqli_connect_error();
	}
	
	$sql = "insert into student ( Stu_Email , Stu_Password , Stu_IC , Stu_Name, Stu_Sex, Stu_SchoolName, Stu_Address, Stu_Category, Stu_Num_H, Stu_Num_Hp ) values ('$email' , '$pass', '$ic' , '$name' , '$gender', '$school' ,'$address' , '$category', '$phoneH' ,'$phoneHp')";
	
	$result = mysqli_query($db,$sql);
	
	if($result){
		mysqli_commit($db);
		print '<script>alert("You are successfully sign up!");</script>';
		print '<script>window.location.assign("login-stu.php");</script>';
		}
		else
		{
			mysqli_rollback($db);
			print '<script>alert("Data is Invalid , No Record Been Added !");</script>';
			print '<script>window.location.assign("signup.php");</script>';
			}
?>