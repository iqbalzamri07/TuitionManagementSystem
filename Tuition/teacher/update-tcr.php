<!DOCTYPE html>
<html lang="en">
    <?php
    $email = $_GET['form-email'];
    ?>
<head>
    	<nav class="navbar navbar-default"  >
  	<div class="container-fluid" >
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home-page.php?form-email=<?php echo $email;?>">Home Page</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
       
        <li class="active"><a href="main-tcr.php?form-email=<?php echo $email;?>">Biodata<span class="sr-only">(current)</span></a></li>
        <li><a href="main-tcr1.php?form-email=<?php echo $email;?>">Time Table</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
       
          <li><a href="../home-page.php">Log Out</a></li>
         
          
        </ul>
      	
      
   
  </div><!-- /.container-fluid -->
</nav>


        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tuition</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>
        <?php
             
             include "dbconnect.php";
             $sql = "select * from teacher where Tcr_Email='$email'";
             $result = mysqli_query($db, $sql);
             $row = mysqli_fetch_assoc($result)
            ?>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1>Update</h1>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Tuition Management System</h3>
                            		<p>Update your information here:</p>
                        		</div>
                        		
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="update.php?form-email=<?php echo $email;?>" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label for="form-name">Name :</label>
			                        	<input type="text" name="form-name" id="form-name" value='<?=$row['Tcr_Name'];?>'>
			                        </div>
                                    
			                        <div class="form-group">
			                        	<label  for="form-ic">IC :</label>
			                        	<input type="text" name="form-ic"id="form-ic" value='<?=$row['Tcr_IC'];?>'>
			                        </div>
			                         <div class="form-group">
			                        	<label for="form-email">Email :</label>
			                        	<input type="text" name="form-email"id="form-email"  value='<?=$row['Tcr_Email'];?>'>
			                        </div>
                                    <div class="form-group">
			                        	<label for="form-address">Address :</label>
			                        	<input type="text" name="form-address"id="form-address" value='<?=$row['Tcr_Address'];?>'>
			                        </div>
                                    
			                        <div class="form-group">
			                        	 <label for="form-status">Status :</label>
                                            <select class="form-control" id="form-status" name="form-status">
                                                <option selected>Status...</option>
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                                
                                            </select>
			                        </div>

			                        <div class="form-group">
			                        	<label for="form-phoneHome">Phone Number(HP) :</label>
			                        	<input type="text" name="form-phoneMobile"id="form-phoneMobile" value='<?=$row['Tcr_TelNum'];?>'>
			                        </div>
			                        
			                        
			                        
			                        <button type="submit" class="btn" style="background: #C30">Update</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                   


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>