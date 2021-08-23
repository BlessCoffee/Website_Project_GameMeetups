<?php
session_start();
if(isset($_SESSION["username"]))
{
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
  	</script>

  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
  	</script>

	<link rel="stylesheet" type="text/css" href="style.css">

  <title>GameMeetups - About Us</title>

</head>
<body class="forest_pic1">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="user_index.php">Game Meetups</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="user_index.php">Home</a></li>
          <li class="active"><a href="user_aboutus.php">About Us</a></li>
          <li><a href="user_featured_games.php">Featured Events</a></li>
          <li><a href="user_myprofile.php">My Profile</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="signout.php"><span class="glyphicon glyphicon-log-in"></span> Sign Out</a></li>
      </ul>
    </div>
  </div>
</nav>




<div class="text-center">
  <br>
  <br>
  <h1><b><u>About Us</u></b></h1>
  <br>
</div>

<div class="container-fluid text-center sidebars">   
  <div class="row content">
    <div class="col-sm-1"></div>
      <div class="col-sm-10 text-center content_color"> 
        <br>
        <hr>
          <p>Game meetups are in-game meetings organised by Gamer's Den every month to gather and meet to have fun and play games together as a community. Our vision is to create a community of a diverse gamers ranging from all ages young or old and from any race or ethicity, to create our own world to bring people to together from every nation and city. We meet up at the end of every week each month on Saturday. 
          </p>
          <br>
          <h3><b>We are grateful that you are a part of our community.</b></h3>
          <br>
          <a href="user_myprofile.php" class="btn btn-default btn-lg" role="button">Profile Page</a>
        <hr>
        <br>
      </div>
    <div class="col-sm-1"></div>
  </div>
</div>




<footer class="bg-dark text-center text-white">

  <div class="text-center p-3">
    &copy; 2021 Copyright:
    <a class="text-white" href=""><span style="color:white">GamersDenClub.com<span></a>
  </div>
</footer>
</body>
</html>

<?php
}
else{
  header("Location:index.html");
}
?>