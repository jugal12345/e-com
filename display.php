<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecom";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT pname, pcategory, pprice, pfile, id
FROM products WHERE pcategory='$_POST[cat]'";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
echo "<table>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
  //  echo "<tr><td>".$row["pfile"]."</td><br><td>".$row["pcategory"]." ".$row["pprice"]."</td></tr><br>";
$pfile = $row["pfile"];
$pcategory = $row["pcategory"];
$pprice = $row["pprice"];
$pname = $row["pname"];
$id = $row["id"];

echo "<html>
<head>

<title></title>
</head>
<body style='background-color:floralwhite;'>";

//echo "$pfile";

//echo"<img src = \"abcs.png\" height = 60px style = \"float:left; margin-top: 15px;\">";

Echo "<img src =\"$pfile\" width=250px />";

echo "<br />";
echo "<form action='bill.php' method='post'>
<label>Price</label>
  <input type='text' id='price' name='price' value='$pprice' readonly><br><br>
  <label>Id</label>
  <input type='text' id='d' name='d' value='$id' readonly><br><br>
  <input type='submit' value='BUY'>
</form>
<br />
<br />
<br />";



}
  echo "</table>";
} else {
  echo "0 results";
}

echo "</body></html>";

$conn->close();
?>
