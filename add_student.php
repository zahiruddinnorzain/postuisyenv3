<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
  kepaknaga@gmail.com</p> 
</div>
  



<div class="container">
  <h2>Add Students</h2>
  <p>Add your student</p>
  <form action="action_page_student.php" method="post">

    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" class="form-control" id="usr" name="fnama">
    </div>

    <div class="form-group">
      <label for="usr">id:</label>
      <input type="text" class="form-control" id="pwd" name="fid">
    </div>

    <div class="form-group">
      <label for="usr">Year of Birth:</label>
      <input type="text" class="form-control" id="pwd" name="ftahun_lahir">
    </div>

    <div class="form-group">
      <label for="usr">Subject:</label>
      <input type="text" class="form-control" id="pwd" name="fsubjek">
    </div>

    <div class="form-group">
      <label for="usr">Day:</label>
      <input type="text" class="form-control" id="pwd" name="fhari">
    </div>

    <div class="form-group">
      <label for="usr">Payment/Hour:</label>
      <input type="number" class="form-control" id="pwd" name="fbayaranHour">
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
      <a href="../postuisyenv3" class="btn btn-info btn-lg" role="button">Back</a>
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