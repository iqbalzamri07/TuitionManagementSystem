
<?php

$code = $_POST['form-code'];
$name = $_POST['form-name'];
$module = $_POST['form-module'];
$price = $_POST['form-price'];


    include "dbconnect.php";
	

if(mysqli_connect_error()){
	echo "Failed to connect to MYSQL".mysqli_connect_error();
	}
	
	$sql = "insert into subject ( Subject_Code , Subject_Name , Subject_Module , Subject_Price) values ('$code' , '$name', '$module' , '$price')";
	
	$result = mysqli_query($db,$sql);
	
	if($result){
		mysqli_commit($db);
		print '<script>alert("Subject are successfully added!");</script>';
		print '<script>window.location.assign("main-adm3.php");</script>';
		}
		else
		{
			mysqli_rollback($db);
			print '<script>alert("Data is Invalid , No Record Been Added !");</script>';
			print '<script>window.location.assign("main-adm3.php");</script>';
			}
?>