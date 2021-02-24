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
        <li class="active"><a href="main-adm1.php">Teacher<span class="sr-only">(current)</span></a></li>
        <li><a href="main-adm2.php">Time Table</a></li>
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

        <!-- Top content -->
        		<img class="try" src="search.png" alt="search" style="width:3%;" >
	<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for id.." align="right">
					
                    <a href="delete1.php"><button class="btn">Delete</button></a>
                    <table id="myTable">
                      <tr class="header">
                        <th style="width:5%;">Email</th>
                        <th style="width:20%;">Name</th>
                        <th style="width:10%;">IC</th>
                        <th style="width:10%;">Status</th>
                        <th style="width:40%;">Address</th>
                        <th style="width:15%;">Phone Number (HP)</th>
                      </tr>
                      <?php
               
               include "dbconnect.php";
               $sql = "select * from teacher ";
               $result = mysqli_query($db, $sql);
               while($row = mysqli_fetch_assoc($result)){
              
                     Print '<tr>
                        <td>'.$row['Tcr_Email'].'</td>
                        <td>'.$row['Tcr_Name'].'</td>
                        <td>'.$row['Tcr_IC'].'</td>
                        <td>'.$row['Tcr_Status'].'</td>
                        <td>'.$row['Tcr_Address'].'</td>
                        <td>'.$row['Tcr_TelNum'].'</td>

                     </tr>';
                   }
                ?>
          
        </table>
        <script>
			function myFunction() {
			  // Declare variables
			  var input, filter, table, tr, td, i;
			  input = document.getElementById("myInput");
			  filter = input.value.toUpperCase();
			  table = document.getElementById("myTable");
			  tr = table.getElementsByTagName("tr");
			
			  // Loop through all table rows, and hide those who don't match the search query
			  for (i = 0; i < tr.length; i++) {
				td = tr[i].getElementsByTagName("td")[0];
				if (td) {
				  if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
					tr[i].style.display = "";
				  } else {
					tr[i].style.display = "none";
				  }
				}
			  }
			}
			</script>

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