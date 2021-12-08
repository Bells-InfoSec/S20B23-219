<?php
require('connection.php');

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

$sql = "SELECT id, fname, lname, subject FROM contact";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["fname"]."-".$row["lname"]. "- MESSAGE:" . $row["subject"]. "<br>";
  }
} else {
  echo "0 results";
}
$con->close();
?><br><br><br><br>
<div style="padding-left:750px;">

    <button type="button" name="button"><a href="registration.php">ADD USER</a></button>

</div><br><br>
<div style="padding-left:350px;">

    <button type="button" name="button"><a href="admin.php">ADMIN PAGE</a></button>

</div>
