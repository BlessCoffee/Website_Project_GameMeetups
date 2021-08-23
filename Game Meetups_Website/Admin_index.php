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

  <title>GameMeetups - Home</title>

</head>
<body id="body" class="forest_pic2">
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
	        <li class="active"><a href="Admin_index.php">Home</a></li>
	        <li><a href="Admin_aboutus.php">About Us</a></li>
	        <li><a href="Admin_featured_games.php">Featured Events</a></li>
	        <li><a href="Admin_ListOfParticipants.php">List Of Participants</a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="signout.php"><span class="glyphicon glyphicon-log-in"></span> Sign Out</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>

    <div class="col-sm-12">
		<div class="container text-center">
			<br><br>
			<div class="row">
				<div class="col-sm-12">
					<h1><b>Gamer's Den: Game Meetups</b></h1>
					<br><br>
				</div>
			</div>
			<h1>This Month's Theme : <b>Co-op & Roll-out</b></h1>
			<br><br><br>
		</div>
	</div>

	<div class="rowcontent_color">
		<div id="myCarousel" class="carousel slide col-sm-12" data-ride="carousel">
		    <!-- Indicators -->
		    <ol class="carousel-indicators">
		      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		      <li data-target="#myCarousel" data-slide-to="1"></li>
		      <li data-target="#myCarousel" data-slide-to="2"></li>
		      <li data-target="#myCarousel" data-slide-to="3"></li>
		      <li data-target="#myCarousel" data-slide-to="4"></li>
		    </ol>

		    <!-- Wrapper for slides -->
		    <div class="carousel-inner" role="listbox">
		      <div class="item active">
		        <img src="images/carousel1.jpg" style="width:1000px;height:500px;" alt="Image">
		        <div class="carousel-caption">
		          <h3><b>We are Gamers!</b></h3>
		          <h3 class="text-center fontcolor">Gamer's Den purpose is focused on bringing people to connect through gaming.</h3>
		        </div>      
		      </div>

		      <div class="item">
		        <img src="images/carousel2.jpg" style="width:1000px;height:500px" alt="Image">
		        <div class="carousel-caption">
		          <h3><b>Think your the best builder?</b></h3>
		          <h3 class="text-center fontcolor">Then join our Valheim building competition to show-off your best designs and builds.</h3>
		        </div>       
		      </div>

		      <div class="item">
		        <img src="images/carousel3.jpg" style="width:1000px;height:500px" alt="Image">
		        <div class="carousel-caption">
		          <h3><b>Hungry for some good old co-op</b></h3>
		          <h3 class="text-center fontcolor">Join our Halo Reach : firefight session and headshots grunts all day.</h3>
		        </div>      
		      </div>

		      <div class="item">
		        <img src="images/carousel4.png" style="width:1000px;height:500px" alt="Image">
		         <div class="carousel-caption">
		          <h3><b>Ready for some exploration and Galaxy Hitchhiking</b></h3>
		        </div> 
		      </div>
		      <div class="item">
		        <img src="images/carousel5.png" style="width:1000px;height:500px" alt="Image">
		         <div class="carousel-caption">
		          <h3><b>Connect with our members on Discord</b></h3>
		          <h3 class="text-center fontcolor">Be a part of our community, come and connect with us, we would love to have you.</h3>
		        </div>   
		      </div>

		    <!-- Left and right controls -->
		    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		      <span class="sr-only">Previous</span>
		    </a>
		    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		      <span class="sr-only">Next</span>
		    </a>
		</div>
	</div>

	<div class="container text-center col-sm-12 sidebars">
		<br><br>
		<h2><b>Gaming Meetups are our way to connect with each other!</b></h2>
		<br><br>
		<h1><b>Join us!</b> <br>at our gaming meetups every Saturday</h1>
		<br>
		<a href="Admin_ListOfParticipants.php" class="btn btn-default btn-lg" role="button">View Registered Participants</a>
		<br><br>
		<br><br>
	</div>

	<div class="container text-center col-sm-12">
		  <br><br>
		  <h2><b><u>Events</u></b></h2>
		  <br>
	</div>

	<div class="container text-center">  
		    <div class="col-sm-4">
		    	<div class="well textbox">
		     	<img src="images/valheim-logo.jpg" class="img-responsive" height="50" width="50" style="width:100%" alt="Valheim Logo">
		      	<br><br>
		      	<h4><b>Valhiem: Building Competition</b></h4>
		      	<br><br>
		      	<p>The long awaited competition has finally come into fruition, ready your hammer and build the greatest great-hall to win and get a special prize for the best builder.</p>
		      	<br>
		      	<br>
		      	<br>
		      	<br>
	      		<p><b>Date :</b> 15<sup>th</sup> June 2021</p>
		      	</div>
		   </div>

		   <div class="container text-center">
		    <div class="col-sm-4"> 
		      <div class="well textbox">
		     	 <img src="images/nms-logo.jpg" class="img-responsive" height="50" width="50"  style="width:100%" alt="No Man's Sky Logo">
		      	<br><br>
		      	<h4><b>No Man's Sky: Expeditions</b></h4>
		      	<br><br>
		      	<p>Join us on an expedition to discover solar-systems, alien-like creature and mysterious-ruins scatter across the stars. Achieve in milestone and achievements to get in-game reward, we are exicted for you to join us.</p>
		      	<br>
		      	<p><b>Date :</b> 22<sup>nd</sup> June 2021</p>
		      </div>
		    </div>
		    <div class="container text-center">
		    <div class="col-sm-4">
		      <div class="well textbox">
		     	<img src="images/Halo-MCC-logo.jpg" class="img-responsive" height="50" width="50" style="width:100%" alt="Halo MCC Logo">
		      	<br><br>
		      	<h4><b>Halo Reach : Firefight</b></h4>
		      	<br><br>
		      	<p> Missing some old school Reach nostalgia, then join our fire team to pin down covenant elites just like old times, but just keep an eye out for those hunters before they one-shot you.</p>
		      	<br>
		      	<br>
		      	<p><b>Date :</b> 29<sup>th</sup> June 2021</p>
		      </div>
		    </div>
		   </div>
	 </div>
	</div>
	<br>
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