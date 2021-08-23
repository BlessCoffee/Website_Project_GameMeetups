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

  <title>GameMeetups - Events</title>

</head>
<body class="forest_pic3">
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
          <li class="active" ><a href="Admin_featured_games.php">Featured Events</a></li>
          <li><a href="Admin_ListOfParticipants.php">List Of Participants</a></li>
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
  <h1><b><u>Featured Events</u></b></h1>
  <br>
  <br>
</div>
  <div class="row">
      <div class="col-sm-1"></div>
        <div class="col-sm-4">
          <div class="well content_color text-center">
           <img src="images/valheim-logo.jpg" class="img-responsive" height="50" width="50" style="width:150%" alt="Valheim Logo">
          </div>
        </div>
        <div class="col-sm-6">
          <div class="well content_color text-center">
            <h3><b>Welcome to Valheim!</b></h3>
            <br>
            <p><b>Valheim</b> is a game about exploring a huge fantasy world inspired by Norse mythology and Viking culture. You start your adventure at the relatively peaceful center of Valheim. The further from the center you travel, the more challenging the world becomes. But you will also find more valuable materials that you can use to craft deadlier weapons and sturdier armor. You will also build your own Viking strongholds and outposts all over the world. Eventually, you will build a mighty longship and sail the great oceans in search of exotic lands -- but be wary of sailing too far.</p>
            <br>
            <h3><b>Valheim : Building Competition</b></h3>
            <br>
            <p>Having a burst of inspiration? Join our building competition with some of the most creative players out there and stand a chance to win prizes which will spark that competitive and creative spirit in you. The theme is <b><i>Castles & Forts</i></b>. Competition will be held on our Valhiem server on <b><u>15<sup>th</sup>June 2021</u></b> but remember to register first. Hope to see you there.</p>
            <br>
            <p><b>May the best builder win!</b></p>
          </div>
        </div>
        <div class="col-sm-1"></div>
      </div>

      <div class="row">
      <div class="col-sm-1"></div>
        <div class="col-sm-4">
          <div class="well content_color text-center">
           <img src="images/nms-logo.jpg" class="img-responsive" height="50" width="50"  style="width:150%" alt="No Man's Sky Logo">
          </div>
        </div>
        <div class="col-sm-6">
          <div class="well content_color text-center">
            <h3><b>Explore - Fight - Trade - Survive</b></h3>
            <br>
            <p><b>No Man's Sky</b> is a procedural science fiction exploration and survival game. The game features planetary exploration, deep oceans, space-based battles, predators and prey, and much more across various procedurally-generated worlds. Each world has its own ecosystems, rewards, and dangers, leading the player through the four core pillars of the game: Explore, Fight, Trade, and Survive.
            <br>
            <h3><b>No Man's Sky: Expeditions</b></h3>
            <br>
            <p>As the new update launches, join our expedition team and venture out to the unknowns, in search of new-techonolgy, alien creatures, abandon space freighters and more...On the <b><u>22<sup>nd</sup> June 2021</u></b> we will be assembling our team explore the universe together.<p>
            <br>
          </div>
        </div>
        <div class="col-sm-1"></div>
      </div>

      <div class="row">
      <div class="col-sm-1"></div>
        <div class="col-sm-4">
          <div class="well content_color text-center">
           <img src="images/Halo-MCC-logo.jpg" class="img-responsive" height="50" width="50" style="width:100%" alt="Halo MCC Logo">
          </div>
        </div>
        <div class="col-sm-6">
          <div class="well content_color text-center">
            <h3><b>Halo Master Chief Collection : Halo Reach</b></h3>
            <br>
            <p><b>Halo: Reach</b> is a first-person shooter developed by Bungie and published by Microsoft Game Studios it is also the fifth installment in the Halo series and a direct prequel to Halo: Combat Evolved. The game takes place in the year 2552, where humanity is locked in a war with the alien Covenant. Players control Noble Six, a member of an elite supersoldier squad, when the human world known as Reach falls under Covenant attack.
            <br>
            <h3><b>Halo Reach : Firefight</b></h3>
            <br>
            <p>Hey thristing for some good old Halo firefights. Miss that birthday celebration when you pop a grunt in the head. Them, come out on our Halo Reach : Firefight event where we will doing firefights ranging from Normal to Legendary difficulty with of course laughs and giggles as we socialize on the way. Be a part! of our firefight team on <b><u>29<sup>th</sup> June 2021</u></b>, remember first come first served.</p>
            <br>
          </div>
        </div>
        <div class="col-sm-1"></div>
      </div>


<footer class="bg-dark text-center text-white">

  <!-- Copyright -->
  <div class="text-center p-3">
    &copy; 2021 Copyright:
    <a class="text-white" href=""><span style="color:white">GamersDenClub.com<span></a>
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
