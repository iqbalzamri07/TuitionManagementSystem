<?php
	$name = $_POST['form-name'];
	$ic = $_POST['form-ic'];
	$email = $_POST['form-email'];
	$status = $_POST['form-status'];
	$address = $_POST['form-address'];
	$phoneHp = $_POST['form-phoneMobile'];
	
	include "dbconnect.php";
    if (mysqli_connect_error())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
	$sql = "update teacher set Tcr_Email='$email', Tcr_Name='$name', Tcr_IC='$ic',Tcr_Status='$status', Tcr_Address='$address', Tcr_TelNum='$phoneHp' where Tcr_Email='$email'";
	$result = mysqli_query($db, $sql);
	
	if($result) //success  
	   {
			mysqli_commit($db);
			Print '<script>alert("Student Details are successfully updated.");</script>'; 
			Print '<script>window.location.assign("main-tcr.php?form-email='.$email.'");</script>'; 
		}
		else //unsuccess  
		{
			mysqli_rollback($db);

			Print '<script>alert("Student Details are failed to update.");</script>'; 
			Print '<script>window.location.assign("main-tcr.php?form-email='.$email.'");</script>'; 		
		}
?>
