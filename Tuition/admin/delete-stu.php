<?php
	$email   = $_POST['form-email'];
  	include "dbconnect.php";
	$sql = "DELETE FROM  student where Stu_Email='$email'"; 
	$result = mysqli_query($db, $sql);
	
	if($result) //success  
	   {
			mysqli_commit($db);
			Print '<script>alert("Student Record is successfully deleted.");</script>'; 
			Print '<script>window.location.assign("main-adm.php");</script>'; 
		}
		else //unsuccess  
		{
			mysqli_rollback($db);

			Print '<script>alert("Student Record is  failed to delete.");</script>'; 
			Print '<script>window.location.assign("main-adm.php");</script>'; 		
		}
?>
