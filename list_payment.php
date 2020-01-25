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
      <h3>LIST PAYMENT</h3>


<table class="table">
    <tr><th>ID</th><th>nama</th><th>Date Pay</th><th>Subject</th><th>Hours</th><th>amount RM</th></tr>

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
//echo "Connected successfully<br>";

//declare username to use in sql
$username = $_SESSION['userID'];

$sql = "SELECT * FROM payment WHERE username='$username' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "</td><td>".$row["ID"]."</td><td>".$row["Pnama"]."</td><td>".$row["Pdatepay"]."</td><td>".$row["Psubjek"]."</td><td>".$row["Pjam"]."</td><td>".$row["Pamount"]."</td></tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

</table>

<!-- print -->
<h3>Print Your Payment</h3>
<form action="print.php" method="post">

    <div class="form-group">
      <label for="usr">Insert ID to print :</label>
      <input type="text" class="form-control" id="usr" name="idprint" required="true">
    </div>

    <button type="submit" class="btn btn-primary">Print</button>

</form>

<!-- delete --><br>
<h3>Delete data</h3>
<form action="action_delete_payment.php" method="post">

    <div class="form-group">
      <label for="usr">Insert ID to delete :</label>
      <input type="text" class="form-control" id="usr" name="deletePayment" required="true">
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

<!--
DELETE FROM customers
WHERE country = 'France'
ORDER BY creditLimit
LIMIT 5;

https://www.w3schools.com/bootstrap4/bootstrap_buttons.asp
  -->