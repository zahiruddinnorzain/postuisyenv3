<?php
  //session username
  session_start();
  $username = $_SESSION['userID'];
  //echo $username;
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>POS TUISYEN V3</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>POS TUISYEN V3</h1>
  <p>Your student management system<br>
  by Bairoha Enterprise (2020)<br>
  kepaknaga@gmail.com<br>
  <b>Welcome <?php echo $username; ?></b>
  <a class="nav-link" href="logout.php">Logout</a>
</p> 
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>LIST TEACHING</h3>




<!-- //time now -->
<div id="jam" class="btn btn-info"></div><br><br>
<script>
var d = new Date().toLocaleString("hi-IN");
document.getElementById("jam").innerHTML = d;
</script>

<table class="table">
    <tr><th>ID</th><th>DATE</th><th>NAME</th><th>SUBJECT</th><th>TIME</th><th>HOURS</th></tr>

<?php
include "connectdb.php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//declare username to use in sql
$username = $_SESSION['userID'];

//echo "Connected successfully<br>";
$sql = "SELECT * FROM teaching WHERE username='$username' ORDER BY tdate DESC"; //ASC
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "</td><td>".$row["ID"]."</td><td>".$row["tdate"]."</td><td>".$row["tnama"]."</td><td>".$row["tsubjek"]."</td><td>".$row["ttime"]."</td><td>".$row["thours"]."</td></tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

</table>

<!--add data-->
<a href="add_teaching.php" class="btn btn-primary" role="button">+ ADD</a>
<br><br>

<!-- delete -->
<h3>Delete data</h3>
<form action="action_delete_teaching.php" method="post">

    <div class="form-group">
      <label for="usr">Insert ID to delete :</label>
      <input type="text" class="form-control" id="usr" name="deleteTeaching" required="true">
    </div>

    <button type="submit" class="btn btn-primary">Delete</button>

</form>


      <br>
      <a href="index2.php" class="btn btn-info btn-lg" role="button">Back</a>
      <br><br>


    </div>
    
  </div>
</div>
</body>
</html>