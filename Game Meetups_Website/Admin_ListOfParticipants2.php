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
      $query1="SELECT * FROM participant";

      $result=mysqli_query($conn,$query1);
    }
?>

<!DOCTYPE html>
<html>


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


</head>

<body class>
<div>
    <div>
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
      <div>
        <div>
          <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name" class="form-control" style="color: black;">
        </div>
      </div>
    </div>
  <div class="col-sm-3"></div>
</div>
<div>
  <div class="col-sm-1"></div>
  <div class="table-responsive col-sm-10">
      <table id="myTable">
        <tr class="text-center">
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


</body>
</html>
<?php
}
else{
  header("Location:index.html");
}
?>


