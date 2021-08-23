
<?php 

  $username=$_POST["username"];
  $password=$_POST["password"];
  $name=$_POST["name"];
  $email=$_POST["email"];
  $discord_name=$_POST["discord_name"];
  $steam_name=$_POST["steam_name"];
  $Valhiem=$_POST["Valhiem"];
  $NMS=$_POST["NMS"];
  $HMCC=$_POST["HMCC"];
  $wants_info=$_POST["wants_info"];
  $level="participant";


  /*Change to request to no if user doesn't want*/
  if($Valhiem != "Yes"){
    $Valhiem="No";
  }
  else{
    $Valhiem="Yes";
  }
  if($NMS != "Yes"){
    $NMS="No";
  }
  else{
    $NMS="Yes";
  }
  if($HMCC != "Yes"){
    $HMCC="No";
  }
  else{
    $HMCC="Yes";
  }
  if($wants_info != "Yes"){
    $wants_info="No";
  }

  $conn=mysqli_connect("localhost","root","","game_meetups");

  if(!$conn){
    die("Connection error:".mysqli_error());

  }
  else{

    $check_query="SELECT username FROM web_accounts where username='$username'";
    $check=mysqli_query($conn,$check_query);

    if(mysqli_num_rows($check)==0){

      $query1="INSERT INTO web_accounts(username, password, level) VALUES('$username','$password','$level')";

      $query2="INSERT INTO event_registration(parti_name, parti_discord_username, parti_steam_username, parti_email, parti_event_NMS, parti_event_Valheim, parti_event_HMCC, parti_wants_info, username) VALUES('$name','$discord_name','$steam_name', '$email','$NMS','$Valhiem','$HMCC','$wants_info','$username')";
      
      $result= mysqli_query($conn,$query1);

      if(!$result){
          die("Invalid query:".mysqli_error());
          echo "<script type=\"text/javascript\">window.alert(\"Error in query.\");</script>";
        }
      else{
        $result= mysqli_query($conn,$query2);

          if(!$result){
            die("Invalid query:".mysqli_error());
            echo "<script type=\"text/javascript\">window.alert(\"Error in query.\");</script>";
          }
          else{

            $query1="SELECT * FROM web_accounts WHERE username='$username'";
            $result=mysqli_query($conn,$query1);
            if(mysqli_num_rows($result)==0){
            echo "<script type=\"text/javascript\">window.alert(\"Password or Username is wrong\");</script>";
              }
            else{
              $row=mysqli_fetch_array($result);
              if($row["password"]==$password){
                session_start();
                $_SESSION["username"]=$username;
                header("Location:user_myprofile.php");
              }
              else{
              echo "<script type=\"text/javascript\">window.alert(\"Password or Username is wrong\");</script>";
              }
            }
          }
      }
    }
    else{
      echo "<script type=\"text/javascript\">window.alert(\"Username taken\");</script>";
    }
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

    <script type="text/javascript">

    </script>

  <link rel="stylesheet" type="text/css" href="style.css">

  <title>GameMeetups - Sign Up</title>

</head>
<body class="forest_pic5">
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
        <li class="active"><a href="signupform.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="loginform.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<br><br>

<div class="row">
  <div class="col-sm-4"></div>
  <div class="container text-center col-sm-4">
      <h1><u><b>Registration</b></u></h1>
  </div>
  <div class="col-sm-4"><br><br></div>
</div>
<br><br>


<div class="row">
  <div class="col-sm-3"><br></div>
    <form class="container-fluid text-left col-sm-6 content_color" method="post" action="signup.php">
      <br><br>
    <div class="form-group">
      <label class="control-label col-sm-3" for="username"><h4>Username :</h4></label>
      <div class="col-sm-8">
        <input required type="username" class="form-control" id="username" placeholder="Enter a Username" name="username">
      </div>
      <br><br>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="password"><h4>Password :</h4></label>
      <div class="col-sm-8">
        <input required type="password" class="form-control" id="password" placeholder="Enter a Password" name="password">
      </div>
      <br><br>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="name"><h4>Name :</h4></label>
      <div class="col-sm-8">
        <input required type="name" class="form-control" id="name" placeholder="Enter Your Full Name" name="name">
      </div>
      <br><br>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="email"><h4>Email :</h4></label>
      <div class="col-sm-8">
        <input required type="email" class="form-control" id="email" placeholder="Enter Your Email" name="email">
      </div>
      <br><br>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-3" for="discord_name"><h4>Discord Name :</h4></label>
      <div class="col-sm-8">
        <input required type="discord_name" class="form-control" id="discord_name" placeholder="Enter Your Discord Account Name With #hashtag" name="discord_name">
      </div>
      <br><br>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="steam_name"><h4>Steam Name :</h4></label>
      <div class="col-sm-8">
        <input required type="steam_name" class="form-control" id="steam_name" placeholder="Enter Your Steam Account Name" name="steam_name">
      </div>
      <br><br>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="events"><h4>Events To Join :</h4></label>
      <div class="col-sm-8">
        <div class="checkbox">
          <label><input name="Valhiem" type="checkbox" value="Yes"> Valhiem : Building Competition</label>
          <br>
          <label><input name="NMS" type="checkbox" value="Yes"> No Man's Sky : Expeditions</label>
          <br>
          <label><input name="HMCC" type="checkbox" value="Yes"> Halo Reach : Firefights</label>
          <br>
          <br>
        </div>
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-8" for="events"><h4>You want us to send you our promotions of new events? :</h4></label>
      <div class="col-sm-4">
        <div class="checkbox">
          <label><input name="wants_info" type="checkbox" value="Yes">Yes</label>
          <p></p>
          <br>
        </div>
      </div>
    </div>
     <div class="form-group">        
        <div class="col-sm-offset-5 col-sm-100">
          <button type="submit" class="btn btn-default">Submit and Roll-out!</button>
        </div>
      </div>
    </div>
  </form>
 <div class="col-sm-3"></div>
</div>


<footer class="bg-dark text-center text-white col-sm-12">
  <div class="text-center p-3">
    &copy; 2021 Copyright:
    <a class="text-white" href=""><span style="color:white">GamersDenClub.com<span></a>
  </div>
</footer>
</body>
</html>
