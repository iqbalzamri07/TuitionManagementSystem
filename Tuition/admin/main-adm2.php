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
        <li class="active"><a href="main-adm2.php">Time Table<span class="sr-only">(current)</span></a></li>
        <li><a href="main-adm3.php">Add Subject</a></li>
        
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
	<?php
        include "dbconnect.php";
        $msg = "";
        if (isset($_POST['upload'])) {
            $image = $_FILE['image']['name'];

            $target ="teach/".basename($image);

            $sql = "update teach set Time_Table='$image' where Subject_Code='FZ'";

            mysqli_query($db,$sql);
            if (move_uploaded_file($_FILE['image']['tmp_name'], $target)) {
                $msg = "SUccessfully";
                }else{
                $msg = "Not working";
            }
        }
            $result = mysqli_query($db,"select * FROM teach")
        

    ?>

        <div id="content">
            
        </div>
        <form method="GET" action="main-adm2.php" enctype="multipart/form-data">
             <label>Student:</label>
            <input type="hidden" name="size" value="1000000">
            <div>
               
                <input type="file" name="image" >
            </div>
            <div>

                <button type="submit" name="upload" class="btn">Upload</button>
            </div>
        </form>
        <form method="GET" action="main-adm2.php" enctype="multipart/form-data">
            <label>Teacher:</label>
            <input type="hidden" name="size" value="1000000">
            <div>
                <input type="file" name="image" >
            </div>
            <div>
                <button type="submit" name="upload" class="btn">Upload</button>
            </div>
        </form>
        
        <?php
        while($row = mysqli_fetch_array($result)){
            echo "<div id='img_div>";
            echo "<img src='teach/".$row['image']."'>";
            echo "</div>";
        }
        ?>
        <img src="calendar.png" width="1299" height="907" style="width:80%;"> 
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