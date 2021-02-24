<!DOCTYPE html>
<html lang="en">

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
      <a class="navbar-brand" href="home-page.php">Home Page</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        <li><a href="login-adm.php">Admin</a></li>
        <li><a href="login-stu.php">Student</a></li>
        <li><a href="login-tc.php">Teacher</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
       <li class="dropdown">
        <a class="dropdown-toggle active" data-toggle="dropdown" href="#">Sign up
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="signup.php">Student</a></li>
          <li><a href="signup1.php">Teacher</a></li>
          
        </ul>
      	</li>
      </ul>
    </div><!-- /.navbar-collapse -->
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
        $email = $_GET['form-email'];
        include "dbconnect.php";

        $query = "SELECT * FROM `subject`";
        $result = mysqli_query($db,$query);
        if (false === $result) 
              {
                 echo mysqli_error();
              }
        ?>
        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1>Teacher Sign Up</h1>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Tuition Management System</h3>
                            		<p>Choose your subject :</p>
                        		</div>
                        		
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="subject.php" method="get" class="login-form">
			                    	
			                        
			                        <div class="form-group">
                                        <p>
                                        <label for="form-subject">Subject Name</label>
                                        <select name="form-subject" id="form-subject">
                                     
                                        <?php
                                           while ($line = mysqli_fetch_array($result)) 
                                             {
                                        ?>
                                         <option value="<?php echo $line['Subject_Code'];?>"><?php echo $line['Subject_Name'];?> </option>
                                         <?php
                                             }
                                         ?>
                                         </select>
     
                                         </p>
			                        </div>
                                    <div class="form-group">
                                        <p>
                                        <label for="form-subject">Email</label>
                                        
                                        <input type="text" name="form-email" value="<?php echo $email;?>"> 
                                         
                                         
     
                                         </p>
                                    </div>
			                        
			                        
			                        
			                        <button type="submit" class="btn">Sign up</button>
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