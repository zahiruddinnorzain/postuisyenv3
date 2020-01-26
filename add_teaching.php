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

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
  <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />



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
  <h2>Add Teaching</h2>
  <p>Add your teaching</p>
  <form action="action_page_teaching.php" method="post">

    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" class="form-control" id="usr" name="ttnama" required="true">
    </div>

    <div class="form-group">
      <label for="usr">Subject:</label>
      <input type="text" class="form-control" id="pwd" name="ttsubjek">
    </div>

    <div class="form-group">
      <label for="usr">Date to pay:</label>
      <!--<input type="text" class="form-control" id="pwd" name="ffPdatepay" required="true">-->

      <input id="datepicker" name="ttdate" width="276"  required="true" />
        <script>
          $('#datepicker').datepicker({
              uiLibrary: 'bootstrap4',
              format: 'dd/mm/yyyy',
          });
        </script>
    </div>

    <input id="timepicker" name="tttime" width="276" />
    <script>
        $('#timepicker').timepicker({
            uiLibrary: 'bootstrap4',
            format: 'hh:mm tt',
        });
    </script>

    <div class="form-group">
      <label for="usr">Hours:</label>
      <input type="number" class="form-control" id="pwd" name="tthours">
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