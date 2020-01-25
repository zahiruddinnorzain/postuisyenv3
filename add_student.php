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

  <?php
  //session username
  session_start();
  $username = $_SESSION['userID'];
  //echo $username;
  ?>

<div class="jumbotron text-center">
  <h1>POS TUISYEN V3</h1>
  <p>Your student management system<br>
  by Bairoha Enterprise (2020)<br>
  kepaknaga@gmail.com<br>
  <b>Welcome <?php echo $username; ?></b>
  <a class="nav-link" href="logout.php">Logout</a></p> 
</div>
  



<div class="container">
  <h2>Add Students</h2>
  <p>Add your student</p>
  <form action="action_page_student.php" method="post">

    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" class="form-control" id="usr" name="fnama" required="true">
    </div>

    <div class="form-group">
      <label for="usr">Year of Birth:</label>
      <input type="number" class="form-control" id="pwd" name="ftahun_lahir" required="true">
    </div>

    <div class="form-group">
      <label for="usr">Subject:</label>
      <input type="text" class="form-control" id="pwd" name="fsubjek" required="true">
    </div>

    <div class="form-group">
      <label for="usr">Day:</label>
      <input type="text" class="form-control" id="pwd" name="fhari" required="true">
    </div>

    <div class="form-group">
      <label for="usr">Payment/Hour:</label>
      <input type="number" class="form-control" id="pwd" name="fbayaranHour" required="true">
    </div>

    <div class="form-group">
      <label for="usr">Address:</label>
      <input type="text" class="form-control" id="pwd" name="falamat">
    </div>

    <div class="form-group">
      <label for="usr">Note:</label>
      <input type="text" class="form-control" id="pwd" name="fnota">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

  </form>

      <br>
      <a href="index2.php" class="btn btn-info btn-lg" role="button">Back</a>
      <br><br>

</div>



      


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