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
  kepaknaga@gmail.com</p> 
</div>
  



<div class="container">
  <h2>Add Payment</h2>
  <p>Add your student payment</p>
  <form action="action_page_payment.php" method="post">

    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" class="form-control" id="usr" name="ffPnama" required="true">
    </div>

    <div class="form-group">
      <label for="usr">Date to pay:</label>
      <input type="text" class="form-control" id="pwd" name="ffPdatepay" required="true">
    </div>

    <div class="form-group">
      <label for="usr">Notes:</label>
      <input type="text" class="form-control" id="pwd" name="ffPnota">
    </div>

    <div class="form-group">
      <label for="usr">Total Amount (RM):</label>
      <input type="text" class="form-control" id="pwd" name="ffPamount" required="true">
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