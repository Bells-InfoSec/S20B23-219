<?php

include 'con.php';

if(isset($_POST['done'])){

 $name = $_POST['name'];
 $Email = $_POST['Email'];
 $country = $_POST['country'];
 $q = " INSERT INTO `reg`(`name`, `Email`,`country`) VALUES ( ' $name', '$Email','$country' )";

 $query = mysqli_query($con,$q);
}
?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

</head>
<body>

 <div class="col-lg-6 m-auto">

 <form method="post">

 <br><br><div class="card">

 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Insert Operation </h1>
 </div><br>

 <label> name: </label>
 <input type="text" name="name" class="form-control"> <br>

 <label> Email: </label>
 <input type="text" name="Email" class="form-control"> <br>


 <label> country: </label>
 <input type="text" name="country" class="form-control"> <br>

 <button  type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>
