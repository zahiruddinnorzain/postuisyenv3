<!DOCTYPE html>
<html>
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

th, td {
  border: 1px solid black;
}

.test{
  border-bottom: 0px;
}

</style>
    
<body style="font-family:verdana;">


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "postuisyenv3";

$idnumber = $_POST['idprint'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully<br>";

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

//$conn->close();
?>


<h2>Invoice</h2>
    
    <p><b>Home Tuition</b><br>No.2, Lorong 4/5, <br>TMN Muhibbah, 48000, <br>Rawang, Selangor.<br><b>019-5966 538<br>(Hazirah)</b></p>
    
    <p><b>Name:</b> <?php echo "$BPnama";?>
    <br><b>Date:</b><?php echo " $BPdatepay";?>
    </p><br>

<table style="width:100%;">
  <tr>
    <th>Subject</th>
    <th>Hours</th> 
    <th>Price/Hour (RM)</th> 
    <th>Amount (RM)</th>
  </tr>
  <tr>
    <td align=center><?php echo "$BPsubjek";?></td>
    <td align=center><?php echo "$BPjam";?></td>
    <td align=center><?php echo "$BPperhour";?>.00</td>
    <td align=right><?php echo "$BPamount";?>.00</td>
  </tr>
  <tr>
    <td style="border-bottom: 0px;border-left: 0px;border-right: 0px;"></td>
    <td style="border-bottom: 0px;border-left: 0px;"></td>
    <td align=right>TOTAL (RM)</td>
    <td align=right><?php echo "$BPamount";?>.00</td>
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
