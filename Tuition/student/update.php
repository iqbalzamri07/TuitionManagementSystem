<?php
	$name = $_POST['form-name'];
	$ic = $_POST['form-ic'];
	$email = $_POST['form-email'];
	$gender = $_POST['form-gender'];
	$school = $_POST['form-school'];
	$address = $_POST['form-address'];
	$category = $_POST['form-category'];
	$phoneH = $_POST['form-phoneHome'];
	$phoneHp = $_POST['form-phoneMobile'];
	
	include "dbconnect.php";
    if (mysqli_connect_error())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
	$sql = "update student set Stu_Email='$email', Stu_Name='$name', Stu_IC='$ic',Stu_Sex='$gender', Stu_SchoolName='$school', Stu_Address='$address', Stu_Category='$category', Stu_Num_H='$phoneH', Stu_Num_Hp='$phoneHp' where Stu_Email='$email'";
	$result = mysqli_query($db, $sql);
	
	if($result) //success  
	   {
			mysqli_commit($db);
			Print '<script>alert("Student Details are successfully updated.");</script>'; 
			Print '<script>window.location.assign("main-stu1.php?form-email='.$email.'");</script>'; 
		}
		else //unsuccess  
		{
			mysqli_rollback($db);

			Print '<script>alert("Student Details are failed to update.");</script>'; 
			Print '<script>window.location.assign("main-stu1.php?form-email='.$email.'");</script>'; 		
		}
?>
