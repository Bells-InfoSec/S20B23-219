<?php require('connection.php'); ?>

<!DOCTYPE html>
<html>
<head>
<style>


.item3 { grid-area: main; }
.item4 { grid-area: right; }
.item5 { grid-area: footer; }

.grid-container {
  display: grid;
  grid-template-areas:

    ' main main right right right'
    ' footer footer footer footer footer';
  grid-gap: 3px;
  background-color: black;
  padding: 3px;
}

.grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 100px 0;
  font-size: 30px;
}
</style>
</head>
<body>

<h1>ADMIN PROFILE</h1>
<?php require('pp.php'); ?>


<div class="">
	<table class="table">
		<head>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Country</th>
				<th colspan="2"> Action</th>
			</tr>
		</head>


    <?php
     $mysqli = new mysqli('localhost:3307','root','','reg1') or die (mysqli_error(mysqli));
     $result = $mysqli->query("SELECT* FROM reg") or die (mysqli->error);
      // pre_r($result);
    	// pre_r($result->fetch_assoc());
      ?>




		<?php
      while($row =($result->fetch_assoc())) {?>

			<tr>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['Email']; ?></td>
					<td><?php echo $row['country']; ?></td>
					<td >
     <a href="registration.php?edit=<?php echo $row['id']; ?>"
			 class="btn btn-info">Edit</a>
			 <a href="pp.php?delete=<?php echo $row['id']; ?>
				class=btn btn-danger">Delete </a>



					</td>
			</tr>



		<?php }  ?>
	</table>

</div>

<?php
function pre_r($array){

  echo '<pre>';
  print_r($array);
  echo '</pre>';
}


?>


</body>
</html>
