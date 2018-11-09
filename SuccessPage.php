<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Hahu Airlines | Success Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<script src="jquery.min.js"></script>
<script src="maxcdn.bootstrapcdn.com\bootstrap\3.3.5\js\bootstrap.min.js"></script>
<link rel="stylesheet" href="maxcdn.bootstrapcdn.com\bootstrap\3.3.5\css\bootstrap.min.css" />
  <link rel = "stylesheet" href="css/home.css">
  <script src="js/home.js"></script>
 
  
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" class="shortPage">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header"><a href="home.html">
  <img src="logo.png" alt="LOGO" height="60" width="220" />
</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
       <ul class="nav navbar-nav navbar-right">
        <li><a href="home.html">HOME</a></li>
		<?php
		if(isset($_SESSION['admin_email']))
		{
			echo("<li><a href='updateFlightsPage.php'>UPDATE FLIGHTS</a></li>");
			echo("<li><a href='AdminLogout.php'>LOG OUT</a></li>");			
		}
		else
		{
			echo('<li><a href="AdminLogin.php">LOG IN</a></li>');
		}
		?>
      </ul>
    </div>
  </div>
</nav>
<div class="jumbotron text-center">
<h1> Flight add successful!</h1>
<p><a href="updateFlightsPage.php">Add or view a flight</a></p>

</div>
<footer class="container-fluid text-center">
  <p>&copy; Hahu Airlines. All Rights Reserved </p>
</footer>
</body>
</html>