<?php
session_start();
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$con = mysqli_connect("localhost:3307","root","","reg1");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();

$_SESSION['messsage']="Record has been saved!";
$_SESSION['msg_typ']="success";


  }
