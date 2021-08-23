<?php 
session_start();
if(isset($_SESSION["username"]))
{
  $username=$_POST["username"];
  $password=$_POST["password"];
  $name=$_POST["name"];
  $email=$_POST["email"];
  $discord_name=$_POST["discord_name"];
  $steam_name=$_POST["steam_name"];
  $Valhiem=$_POST["Valhiem"];
  $NMS=$_POST["NMS"];
  $HMCC=$_POST["HMCC"];

  if($Valhiem != "Yes"){
    $Valhiem="No";
  }
  if($NMS != "Yes"){
    $NMS="No";
  }
  if($HMCC != "Yes"){
    $HMCC="No";
  }

  $conn=mysqli_connect("localhost","root","","game_meetups");
  if(!$conn){
    die("Connection error:".mysqli_error());
  }
  else{

      $query="SELECT * FROM web_accounts WHERE username='$username'";
      $check=mysqli_query($conn,$query);
    

          $query1="UPDATE web_accounts SET username='$username', password='$password'WHERE username='".$_SESSION["username"]."'";
          $query2="UPDATE event_registration SET parti_name='$name', parti_discord_username='$discord_name', parti_steam_username='$steam_name', 	parti_email='$email',parti_event_NMS='$NMS', parti_event_Valheim='$Valhiem',parti_event_HMCC='$HMCC',username='$username' WHERE username='".$_SESSION["username"]."'";
          $result= mysqli_query($conn,$query1);
          if(!$result){
            die("Invalid query:".mysqli_error());  
          }
          else{
    	      $result= mysqli_query($conn,$query2);
      	      if(!$result){
      	        die("Invalid query:".mysqli_error());
      	      }
              else{
                session_destroy();
                $check=mysqli_query($conn,$query);
                $row=mysqli_fetch_array($check);
                  if($row["password"]==$password){
                  session_start();
                  $_SESSION["username"]=$username;
               	  header("Location:user_myprofile.php");
                  }
                  else{
                    header("Location:index.html");
                  }
              }
          }
  }
}
else{
    header("Location:index.html");
}
?>