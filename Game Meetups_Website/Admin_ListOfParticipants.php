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
      $query1="SELECT event_registration.parti_name ,web_accounts.username, event_registration.parti_email, event_registration.parti_discord_username, event_registration.parti_steam_username, event_registration.parti_event_NMS, event_registration.parti_event_Valheim, event_registration.parti_event_HMCC FROM web_accounts INNER JOIN event_registration WHERE web_accounts.username = event_registration.username ORDER BY parti_name";

      $result=mysqli_query($conn,$query1);
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

  <script>
      function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[0];
          if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          }       
        }
      }
</script>

	<link rel="stylesheet" type="text/css" href="style.css">

  <title>GameMeetups - Participants</title>

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
      <a class="navbar-brand" href="Admin_index.php">Game Meetups</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="Admin_index.php">Home</a></li>
          <li><a href="Admin_aboutus.php">About Us</a></li>
          <li><a href="Admin_featured_games.php">Featured Events</a></li>
          <li class="active"><a href="Admin_ListOfParticipants.php">List Of Participants</a></li>
        </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signout.php"><span class="glyphicon glyphicon-log-in"></span> Sign Out</a></li>
      </ul>
    </div>
  </div>
</nav>
<div>
    <div class="col-sm-12 text-center">
      <div>
        <br>
        <br>
          <h1><b><u>List Of Registered Participants</u></b></h1>
         <br>
        <br>
      </div>
    </div>
</div>
<div class="row">
  <div class="col-sm-3"></div>
    <div class="col-sm-6 text-center">
      <div class="content_color2">
        <div>
          <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name" class="form-control" style="color: black;">
        </div>
      </div>
    </div>
  <div class="col-sm-3"></div>
</div>
<div class="forest_pic6">
  <div class="col-sm-1"></div>
  <div class="table-responsive col-sm-10">
      <table id="myTable" class="content_color2">
        <tr class="content_color text-center">
          <th>Name</th>
          <th>Username</th>
          <th>Email</th>
          <th>Discord Name</th>
          <th>Steam Name</th>
          <th>No Man's Sky - Expeditions</th>
          <th>Valhiem - Building Competition</th>
          <th>Halo Reach - Firefight</th>
        </tr>
          <?php 

          if(!$result){
            die("Invalid query: ".mysqli_error());
          }
          else{
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['parti_name'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['parti_email'] . "</td>";
                echo "<td>" . $row['parti_discord_username'] . "</td>";
                echo "<td>" . $row['parti_steam_username'] . "</td>";
                echo "<td>" . $row['parti_event_NMS'] . "</td>";
                echo "<td>" . $row['parti_event_Valheim'] . "</td>";
                echo "<td>" . $row['parti_event_HMCC'] . "</td>";
                echo "</tr>";       
              }
            }
          ?>
      </table>
    </div>
  <div class="col-sm-1"></div>
</div>

<footer class="bg-dark text-center text-white">

  <!-- Copyright -->
  <div class="text-center p-3 col-sm-12">
    <br>
    <br>
    &copy; 2021 Copyright:
    <a class="text-white" href=""><span style="color:white">GamersDenClub.com<span></a>
    <br>
    <br>
  </div>
  <!-- Copyright -->
</footer>
</body>
</html>
<?php
}
else{
  header("Location:index.html");
}
?>


