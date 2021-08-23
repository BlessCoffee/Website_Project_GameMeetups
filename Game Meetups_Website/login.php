
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
  	</script>

  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
  	</script>

	<link rel="stylesheet" type="text/css" href="style.css">

  <title>GameMeetups - Login</title>

</head>
<body class="forest_pic4">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.html">Game Meetups</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.html">Home</a></li>
        <li><a href="aboutus.html">About Us</a></li>
        <li><a href="featured_games.html">Featured Events</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signupform.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li class="active"><a href="loginform.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<br><br>
<div class="row">
  <div class="col-sm-4"></div>
  <div class="container text-center col-sm-4">
      <h1><u><b>Login</b></u></h1>
  </div>
  <div class="col-sm-4"><br><br></div>
</div>
<br><br>
<div class>
  <div class="col-sm-3"><br></div>
    <form class="container-fluid text-left col-sm-6 content_color" method="post" action="login.php">
      <br><br>
    <div class="form-group">
      <label class="control-label col-sm-2" for="username"><h4>Username:</h4></label>
      <div class="col-sm-10">
        <input required type="username" class="form-control" id="username" placeholder="Enter a Username" name="username">
      </div>
      <br><br>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="password"><h4>Password:</h4></label>
      <div class="col-sm-10">
        <input required type="password" class="form-control" id="password" placeholder="Enter a Password" name="password">
      </div>
      <br>
     <br>
    </div>
     <div class="form-group text-center">        
        <div>
          <button type="submit" class="btn btn-default">Login</button>
        </div>
      </div>
    </div>
  </form>
 <div class="col-sm-4"></div>
</div>


<footer class="bg-dark text-center text-white col-sm-12">
  <div class="text-center p-3">
    &copy; 2021 Copyright:
    <a class="text-white" href=""><span style="color:white">GamersDenClub.com<span></a>
  </div>
</footer>
</body>
</html>

<?php

	$username=$_POST["username"];
	$password=$_POST["password"];

	$conn=mysqli_connect("localhost","root","","game_meetups");

	if(!$conn){
		die("Connection Error:".mysqli_error());
	}
	else{
		$query1="SELECT * FROM web_accounts WHERE username='$username'";

		$result=mysqli_query($conn,$query1);

		if(!$result){
			die("Invalid query: ".mysqli_error());
		}
		else{
			if(mysqli_num_rows($result)==0){
				echo "<script type=\"text/javascript\">window.alert(\"Password or Username is wrong\");</script>";
			}
			else{
				$row=mysqli_fetch_array($result);
				if($row["password"]==$password){
					session_start();
					$_SESSION["username"]=$username;

					if($row["level"] == "Admin"){
						header("Location:Admin_ListOfParticipants.php");
					}
					else{
						header("Location:user_myprofile.php");
					}
					
				}
				else{
					echo "<script type=\"text/javascript\">window.alert(\"Password or Username is wrong\");</script>";
				}
			}

		}
	}

?>
