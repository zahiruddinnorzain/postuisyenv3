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
      <h3>LIST STUDENT</h3>


<table class="table">
    <tr><th>ID</th><th>Name</th><th>tahun lahir</th><th>subjek</th><th>hari</th><th>bayaran/Hour</th><th>alamat</th><th>nota</th></tr>

      <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "postuisyenv3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//declare username to use in sql
$username = $_SESSION['userID'];

//echo "Connected successfully<br>";
$sql = "SELECT * FROM pelajar WHERE username='$username' ";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "</td><td>".$row["id"]."</td><td>".$row["nama"]."</td><td>".$row["tahun_lahir"]."</td><td>".$row["subjek"]."</td><td>".$row["hari"]."</td><td>".$row["bayaranHour"]."</td><td>".$row["alamat"]."</td><td>".$row["nota"]."</td></tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

</table>

<!-- delete -->
<h3>Delete data</h3>
<form action="action_delete_student.php" method="post">

    <div class="form-group">
      <label for="usr">Insert ID to delete :</label>
      <input type="text" class="form-control" id="usr" name="deleteStudent" required="true">
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