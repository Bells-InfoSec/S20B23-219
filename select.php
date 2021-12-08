<?php
require('connection.php');

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

$sql = "SELECT id, name, Email FROM reg";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. "- Email: " . $row["Email"]. "<br>";
  }
} else {
  echo "0 results";
}
$con->close();
?>
