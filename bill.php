<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" type="text/css" href="stylet.css" />
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="background-color:#d7fbcb;">
    <?php
      echo "Your product will be delivered to your address.<br />";
      echo "Your bill is Rs".$_POST['price'].".<br />";
      $servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecom";
$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "DELETE FROM products WHERE id='$_POST[d]'";

if (mysqli_query($conn, $sql)) {
  echo "Order placed.";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
echo"<br />"
     ?>
     <a href="homepage.html">Click here to continue shopping</a>
  </body>
</html>
