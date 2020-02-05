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
  <p>Your student management system v3.0<br>
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
      <a href="list_teaching.php" class="btn btn-info btn-lg" role="button">LIST TEACHING</a>
      <br><br>
    </div>
    <div class="col-sm-4">
      <h3>LIST STUDENT</h3>
      <a href="list_student.php" class="btn btn-info btn-lg" role="button">LIST STUDENT</a>
      <br><br>
    </div>
    <div class="col-sm-4">
      <h3>LIST PAYMENT</h3>
      <a href="list_payment.php" class="btn btn-info btn-lg" role="button">LIST PAYMENT</a>
      <br><br>
    </div>   
    
  </div>
</div>

</body>
</html>