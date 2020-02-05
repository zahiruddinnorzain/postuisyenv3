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
  <a class="nav-link" href="logout.php">Logout</a></p> 
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      


<?php
$affPnama = $_POST["ffPnama"];
$affPdatepay = $_POST["ffPdatepay"];
$affPsubjek = $_POST["ffPsubjek"];
$affPjam = $_POST["ffPjam"];
$affPamount = $_POST["ffPamount"];
$affusername = $username;




include "connectdb.php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully<br>";

$sql = "INSERT INTO payment (username,Pnama,Pdatepay,Psubjek,Pjam,Pamount) 
VALUES ('$affusername','$affPnama','$affPdatepay','$affPsubjek','$affPjam','$affPamount')";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    echo "<div class='alert alert-success'><strong>Success!</strong> New record created successfully.</div>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>




      <br>
      <a href="list_payment.php" class="btn btn-info btn-lg" role="button">Back</a>
      <br><br>

    </div>
  </div>
</div>

</body>
</html>