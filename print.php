<?php
session_start();

$idnumber = $_POST['idprint'];
include "connectdb.php";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully<br>";

// //data from payment
$sql = "SELECT Pnama, Pdatepay, Psubjek, Pjam, Pamount FROM payment WHERE ID='$idnumber'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "Name: " . $row["Pnama"]. " " . $row["Psubjek"]. "<br>";
        $BPnama = $row["Pnama"];
        $BPdatepay = $row["Pdatepay"];
        $BPsubjek = $row["Psubjek"];
        $BPjam = $row["Pjam"];
        $BPamount = $row["Pamount"];
        $BPperhour = $BPamount / $BPjam;
    }
} else {
    echo "0 results";
}

$username = $_SESSION['userID'];

// //data from users
$sql2 = "SELECT name, alamat, phone, username FROM users WHERE name='$username'";
$result = $conn->query($sql2);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $Unama = $row["name"];
        $Ualamat = $row["alamat"];
        $Uphone = $row["phone"];
        $Uusername = $row["username"];
    }
} else {
    echo "0 results";
}

//$conn->close();
?>


<!DOCTYPE html>
<html>
<head>
  <title>Receipt_Tuition
  </title>
</head>
<style>

body {
  height: 421px;/*842*/
  width: 450px;/*595-298*/
  /* to centre page on screen*/
  margin-left: auto;
  margin-right: auto;
}

table {
  border-collapse: collapse;
}

#bawah {
  border: 1px solid black;
}

.test{
  border-bottom: 0px;
}

#alamat{
  border: 0px;
  text-align: left;
  font-weight: normal;
}

</style>
    
<body style="font-family:verdana;font-weight: normal;">





<h2>Invoice</h2>
    <table id="alamat" width="40%"><tr id="alamat"><th id="alamat">
    <b>Home Tuition</b><br><?php echo "$Ualamat";?><br><b>0<?php echo "$Uphone";?><br>(<?php echo "$Uusername";?>)</b>
    </table></tr></th>
    
    <p><b>Name:</b> <?php echo "$BPnama";?>
    <br><b>Date:</b><?php echo " $BPdatepay";?>
    </p><br>

<table style="width:100%;">
  <tr id="bawah">
    <th id="bawah">Subject</th>
    <th id="bawah">Hours</th> 
    <th id="bawah">Price/Hour (RM)</th> 
    <th id="bawah">Amount (RM)</th>
  </tr>
  <tr id="bawah">
    <td id="bawah" align=center><?php echo "$BPsubjek";?></td>
    <td id="bawah" align=center><?php echo "$BPjam";?></td>
    <td id="bawah" align=center><?php echo "$BPperhour";?>.00</td>
    <td id="bawah" align=right><?php echo "$BPamount";?>.00</td>
  </tr>
  <tr>
    <td style="border-bottom: 0px;border-left: 0px;border-right: 0px;"></td>
    <td style="border-bottom: 0px;border-left: 0px;"></td>
    <td id="bawah" align=right>TOTAL (RM)</td>
    <td id="bawah" align=right><?php echo "$BPamount";?>.00</td>
  </tr>
</table>

<br><br><br>
<p>
    <h5>Generated automatically. No signature is required.</h5><br>
<!-- <button onclick="myFunction()">Print</button> -->
    </p>

<?php
$conn->close();
?>

<script>
window.print();
//window.location.href = '../postuisyenv3';
function myFunction() {
  window.print();
}
</script>

</body>
</html>
