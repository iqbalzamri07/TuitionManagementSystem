<?php
	$email   = $_POST['form-email'];
  	include "dbconnect.php";
	$sql = "DELETE FROM  teacher where Tcr_Email='$email'"; 
	$result = mysqli_query($db, $sql);
	
	if($result) //success  
	   {
			mysqli_commit($db);
			Print '<script>alert("Teacher Record is successfully deleted.");</script>'; 
			Print '<script>window.location.assign("main-adm1.php");</script>'; 
		}
		else //unsuccess  
		{
			mysqli_rollback($db);

			Print '<script>alert("TEacher Record is  failed to delete.");</script>'; 
			Print '<script>window.location.assign("main-adm1.php");</script>'; 		
		}
?>
