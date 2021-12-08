


<html>
<head>
	<title> IEEE conference</title>

	<link href="style.css" type="text/css" rel="stylesheet">

</head>
<body>


	<div class="top">
		<div>
		 Contact:+256 312 350 800 /880. Email us: info@ucu.ac.ug
		</div>
	</div>

	<div class="logo" >
		<div>
			<table>
				<tr>

					<td> <br> <br>
						<font size="4px">
							<a href="home.php">HOME</a>
							<a href="registration.php">REGISTER</a>
							<a href="speakers.php">SPEAKERS</a>
							<a href="contact.php">CONTACT US</a>
							<a href="login1.php.">ADMIN</a>
						</font>
					</td>
				</tr>
			</table>
		</div>
	</div><br><br>

	<?php
require_once('connection.php');

$errors = array();
// If form submitted, insert values into the database.
if (isset($_POST['submit'])){
        // removes backslashes
	$name = stripslashes($_REQUEST['name']);
        //escapes special characters in a string
	$name = mysqli_real_escape_string($con,$name);
	$Email = stripslashes($_REQUEST['email']);
	$Email = mysqli_real_escape_string($con,$Email);
	$country = stripslashes($_REQUEST['country']);
	$country = mysqli_real_escape_string($con,$country);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into reg (name, Email, country)
VALUES ('$name', '$Email','$country')";
        $result   = mysqli_query($con,$query);


				if(empty($name)){
					array_push($errors,"enter  name");
				}
				if(empty($Email)){
					array_push($errors,"enter Email");
				}
				if(empty($country)){
					array_push($errors,"Select country");
				}



				if(count($errors)==0){
					if($result){
	      header("location:LOGIN.php");
				}
				}else{

				echo "fill in the details correctly";
				}




    }
?>



<div class="BELLS" style="background-image:url('image/a2.JPG'); background-size: 650px 390px; ">


<div class="tale" ><br><br>
	<h3 > <p  style="text-align: center;" >REGISTRATION  FORM</p></h3><br>

    <form action="" method="post"><br>

      <label for="name" >Name</label>
      <input type="text" id="name" name="name" placeholder="Your name.."><br>

      <label for="Email">EMAIL</label><br>
      <input type="email" id="lname" name="email" placeholder="Your Email.."><br>

      <label for="country">Country</label>
      <select id="country" name="country">
				<option value="SELECT"> Select Your country..</option>
        <option value="australia">Australia</option>
        <option value="Argentina">Argentina</option>
        <option value="Brazil">Brazil</option>
        <option value="Botswana">Botswana</option>
        <option value="Burundi">Burundi</option>
        <option value="	Cameroon">Cameroon</option>
        <option value="	Chad">Chad</option>
        <option value="Chile">Chile</option>
        <option value="Egypt">Egypt</option>
        <option value="Ethiopia">Ethiopia</option>
        <option value="Kenya">Kenya</option>
        <option value="Libya">Libya</option>
        <option value="Mali">Mali</option>
        <option value="Niger">Niger</option>
        <option value="South Africa">South Africa</option>
        <option value="South Sudan">South Sudan</option>
        <option value="Sudan">Sudan</option>
        <option value="Switzerland">Switzerland</option>
        <option value="Tanzania">Tanzania</option>
        <option value="Turkey">Turkey</option>
        <option value="Uganda">Uganda</option>
        <option value="Uruguay">Uruguay</option>
        <option value="Zambia">Zambia</option>
        <option value="Zimbabwe">Zimbabwe</option>


      </select>
     <input type="submit" name="submit" value="Submit" style="color:backslashes; background-color:darkcyan" />


    </form>
<br><br>

</div>
</div>
</body><br><br>


	<div class="nav_down">
		<div>
		 &copy;UGANDA CHRISTIAN UNIVERSITY , site designed & developed by KATUMBIRE BOB BELLS
		</div>
	</div>
</html>
