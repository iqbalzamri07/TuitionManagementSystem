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

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1>Student Sign Up</h1>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Tuition Management System</h3>
                            		<p>Enter your information here:</p>
                        		</div>
                        		
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="stu-signup.php" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-name">Name</label>
			                        	<input type="text" name="form-name" placeholder="Name..." class="form-name form-control" id="form-name">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-ic">IC</label>
			                        	<input type="text" name="form-ic" placeholder="IC..." class="form-ic form-control" id="form-ic">
			                        </div>
			                         <div class="form-group">
			                        	<label class="sr-only" for="form-email">Email</label>
			                        	<input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email" >
			                        </div>
                                    <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
			                        </div>
			                        <div class="form-group">
			                        	 <label class="sr-only" for="form-gender">Gender</label>
  											<select class="form-control" id="form-gender" name="form-gender">
    											<option selected>Gender...</option>
    											<option value="M">Male</option>
    											<option value="F">Female</option>
    											
  											</select>
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-school">School Name</label>
			                        	<input type="text" name="form-school" placeholder="School Name..." class="form-school form-control" id="form-school">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-address">Address</label>
			                        	<textarea name="form-address" cols="30" rows="4"  class="form-address form-control" id="form-address" placeholder="Address..."></textarea>
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-category">Category</label>
			                        	<input type="text" name="form-category" placeholder="Category (e.g Form1, Form2 etc)" class="form-category form-control" id="form-category" >
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-phoneHome">Phone Number(H)</label>
			                        	<input type="text" name="form-phoneHome" placeholder="Phone Number(Home)..." class="form-phoneHome form-control" id="form-phoneHome" >
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-phoneMobile">Phone Number(Mobile)</label>
			                        	<input type="text" name="form-phoneMobile" placeholder="Phone Number(Mobile)..." class="form-phoneMobile form-control" id="form-phoneMobile" >
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