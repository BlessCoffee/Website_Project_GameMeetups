<?php
session_start();
if(isset($_SESSION["username"]))
{


    $conn=mysqli_connect("localhost","root","","game_meetups");
    $username=$_SESSION["username"];

    if(!$conn){
      die("Connection Error:".mysqli_error());
    }
    else{
      $query1="SELECT * FROM event_registration WHERE username='$username'";

      $result=mysqli_query($conn,$query1);

      if(!$result){
        die("Invalid query: ".mysqli_error());
      }
      else{
          $row=mysqli_fetch_array($result);
        }

      $query2="SELECT * FROM web_accounts WHERE username='$username'";

      $result2=mysqli_query($conn,$query2);

      if(!$result2){
        die("Invalid query: ".mysqli_error());
      }
      else{
          $row2=mysqli_fetch_array($result2);
        }
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

  <title>GameMeetups - Profile</title>

</head>
<body class="forest_pic2" style="background-size: 150%;">
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
          <li><a href="user_aboutus.php">About Us</a></li>
          <li><a href="user_featured_games.php">Featured Events</a></li>
          <li class="active"><a href="user_myprofile.php">My Profile</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="signout.php"><span class="glyphicon glyphicon-log-in"></span> Sign Out</a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="card">
    <div class="col-sm-12 text-center content_color">
      <div>
        <h1>Your Profile</h1>
         <br>
          <img src="images/profile.png" alt="default_profile" style="width:10%">
        <br>
        <br>
      </div>
    </div>
</div>

<div class="col-sm-12"><br><br></div>
<div class="row">
  <div class="col-sm-1"></div>
  <h2 class="col-sm-4 text-center"><b><u>Details</b></u></h2>
    <div class="col-sm-2"></div>
  <h2 class="col-sm-4 text-center"><b><u>Events Joining</b></u></h2>
  <div class="col-sm-1"></div>
</div>

<div class="row">
  <div class="col-sm-1"><br><br></div>
      <div class="col-sm-4 content_color">
        <br>
        <label class="control-label"><h4><b>Username</b> :<?php echo " $row[8]";?></h4></label>
        <br><br>
        <label class="control-label"><h4><b>Name</b> :<?php echo " $row[0]";?></h4></label>
        <br><br>
        <label class="control-label"><h4><b>Email</b> :<?php echo" $row[3]";?></h4></label>
        <br><br>
        <label class="control-label"><h4><b>Discord Name</b> :<?php echo " $row[1]";?></h4></label>
        <br><br>
        <label class="control-label"><h4><b>Steam Name</b> :<?php echo " $row[2]";?></h4></label>
        <br><br>
      </div>

       <div class="col-sm-2"></div>
      <div class="col-sm-4 content_color text-center">
        <br>
        <label class="control-label"><h4><b>No Man's Sky - Expeditions</b><?php echo " : $row[4]";?></h4></label>
        <br><br>
        <label class="control-label"><h4><b>Valhiem - Building Competition</b><?php echo " : $row[5]";?></h4></label>
        <br><br>
        <label class="control-label"><h4><b>Halo Reach - Firefight</b> <?php echo" : $row[6]";?></h4></label>
        <br><br>
      </div>
      <div class="col-sm-1"><br><br></div>
</div>


<div class="col-sm-12"><br><br></div>
<h2 class="col-sm-12 text-center"><b><u>Edit Details</b></u></h2>
<div class="row">
  <div class="col-sm-3"></div>
      <div class="col-sm-6 content_color3">
        <form class="container-fluid col-sm-12 " method="post" action="user_editdetails.php">
      <br><br>
    <div class="form-group">
      <label class="control-label col-sm-3" for="username"><h4>Username :</h4></label>
      <div class="col-sm-7">
        <input required type="username" class="form-control" id="username" placeholder="Enter a Username" name="username" value=<?php echo "$row[8]"?>>
      </div>
      <br><br>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="password"><h4>Password :</h4></label>
      <div class="col-sm-7">
        <input required type="password" class="form-control" id="password" placeholder="Enter a Password" name="password" value=<?php echo "$row2[1]"?>>
      </div>
      <br><br>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="name"><h4>Name :</h4></label>
      <div class="col-sm-7">
        <input required type="name" class="form-control" id="name" placeholder="Enter Your Full Name" name="name" value=<?php echo "$row[0]"?>>
      </div>
      <br><br>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="email"><h4>Email :</h4></label>
      <div class="col-sm-7">
        <input required type="email" class="form-control" id="email" placeholder="Enter Your Email" name="email" value=<?php echo "$row[3]"?>>
      </div>
      <br><br>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-3" for="discord_name"><h4>Discord Name :</h4></label>
      <div class="col-sm-7">
        <input required type="discord_name" class="form-control" id="discord_name" placeholder="Enter Your Discord Account Name With #hashtag" name="discord_name" value=<?php echo "$row[1]"?>>
      </div>
      <br><br>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="steam_name"><h4>Steam Name :</h4></label>
      <div class="col-sm-7">
        <input required type="steam_name" class="form-control" id="steam_name" placeholder="Enter Your Steam Account Name" name="steam_name" value=<?php echo "$row[2]"?>>
      </div>
      <br><br>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="events"><h4>Events To Join :</h4></label>
      <div class="col-sm-7">
        <div class="checkbox">
          <?php  
          if($row[5]=="Yes")
            echo "<label><input checked name=\"Valhiem\" type=\"checkbox\" value=\"Yes\"> Valhiem : Building Competition</label><br>";
          else
            echo "<label><input name=\"Valhiem\" type=\"checkbox\" value=\"Yes\"> Valhiem : Building Competition</label><br>";

          if($row[4]=="Yes")
            echo "<label><input checked name=\"NMS\" type=\"checkbox\" value=\"Yes\"> No Man's Sky : Expeditions</label><br>";
          else
            echo "<label><input name=\"NMS\" type=\"checkbox\" value=\"Yes\"> No Man's Sky : Expeditions</label><br>";
          if($row[6]=="Yes")
            echo "<label><input checked name=\"HMCC\" type=\"checkbox\" value=\"Yes\"> Halo Reach : Firefights</label><br>";
          else
            echo "<label><input name=\"HMCC\" type=\"checkbox\" value=\"Yes\"> Halo Reach : Firefights</label><br>";
          ?>
          <br>
          <br>
        </div>
      </div>
    </div>
     <div class="form-group">
      <div></div>  
        <div class="text-center col-sm-12">
          <button type="submit" class="btn btn-default">Edit Details</button>
          <button type="reset" class="btn btn-default">Reset</button>
          <br><br>
        </div>
      </div>
    </div>
    <div class="col-sm-3"></div>
  </form>
 </div>
</div>
<footer class="bg-dark text-center text-white">

  <!-- Copyright -->
  <div class="text-center p-3 col-sm-12">
   &copy; 2021 Copyright:
    <a class="text-white" href=""><span style="color:white">GamersDenClub.com<span></a>
  </div>
  <!-- Copyright -->
</footer>
</body>
</html>

<?php
  }
}
else{
    header("Location:index.html");
  }
?>

