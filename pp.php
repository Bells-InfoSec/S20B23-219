
    <?php
    session_start();

     $mysqli = new mysqli('localhost:3307','root','','reg1') or die (mysqli_error(mysqli));
     $result = $mysqli->query("SELECT* FROM reg") or die (mysqli->error);
      // pre_r($result);
    	// pre_r($result->fetch_assoc());
      ?>

<?php

if(isset($_GET['delete']))
  $id= $_GET['delete'];
  $query="DELETE FROM reg WHERE reg.id=$id" or die($mysqli->errors());

  $_SESSION['messsage']="Record has been deleted!";
  $_SESSION['msg_typ']="danger";
header("location:edit1.php")

 ?>
