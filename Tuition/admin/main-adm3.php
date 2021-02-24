<!DOCTYPE html>
<html lang="en">

    <head>
    	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
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
      <ul class="nav navbar-nav" >
        
        
        <li><a href="main-adm.php">Student</a></li>
        <li><a href="main-adm1.php">Teacher</a></li>
        <li><a href="main-adm2.php">Time Table</a></li>
        <li class="active"><a href="main-adm3.php">Add Subject<span class="sr-only">(current)</span></a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
     	<li ><a href="../home-page.php">Log Out</a></li>
        
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

        <div class="top-content">
            
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1>Add Subject</h1>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    
                                    <p>Enter subject information here:</p>
                                </div>
                                
                            </div>
                            <div class="form-bottom">
                                <form role="form" action="subject.php" method="post" class="login-form">
                                    <div class="form-group">
                                        <label class="sr-only" for="form-code">Subject Code</label>
                                        <input type="text" name="form-code" placeholder="Subject Code..." class="form-code form-control" id="form-code">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-name">Subject Name</label>
                                        <input type="text" name="form-name" placeholder="Subject Name..." class="form-name form-control" id="form-name">
                                    </div>
                                     <div class="form-group">
                                        <label class="sr-only" for="form-module">Subject Module</label>
                                        <input type="text" name="form-module" placeholder="Subject Module..." class="form-module form-control" id="form-module" >
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-price">Subject Price</label>
                                        <input type="text" name="form-price" placeholder="Subject Price..." class="form-price form-control" id="form-price" >
                                    </div>
                                    
                                    
                                    
                                    <button type="submit" class="btn">Submit</button>
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