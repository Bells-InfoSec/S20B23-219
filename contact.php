<html>
<head>
	<title> IEEE conference</title>

	<link href="style.css" type="text/css" rel="stylesheet">

</head>
<body style="background-image: url("image/12.PNG");">

	<div class="top">
		<div>
		 Contact:+256 312 350 800 /880. Email us: info@ucu.ac.ug
		</div>
	</div>

	<div class="logo" style="background-image:url('img/1.jpg');">
		<div>
			<table>
				<tr>

					<td> <br> <br>
						<font size="4px">
							<a href="home.php">HOME</a>
							<a href="registration.php">REGISTER</a>
							<a href="speakers.php">SPEAKERS</a>
							<a href="contact.php">CONTACT US</a>
							<a href="login1.php">ADMIN</a>
						</font>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<br><br>
	<div class="me" style="background-image:url('image/10.JPG'); background-size: 650px 630px;" >


<h2 style="text-align: center;"> For more details or any inquires, please get to us through the form below</h2><br>

<?php
require('connection.php');
// If form submitted, insert values into the database.
$errors = array();
if (isset($_POST['submit'])){
			// removes backslashes
$fname = stripslashes($_REQUEST['fname']);
			//escapes special characters in a string
$fname = mysqli_real_escape_string($con,$fname);
$lname = stripslashes($_REQUEST['lname']);
$lname = mysqli_real_escape_string($con,$lname);
$country = stripslashes($_REQUEST['country']);
$country = mysqli_real_escape_string($con,$country);
$subject = stripslashes($_REQUEST['subject']);
$subject = mysqli_real_escape_string($con,$subject);
$trn_date = date("Y-m-d H:i:s");

if(empty($fname)){
	array_push($errors,"enter first name");
}
if(empty($lname)){
	array_push($errors,"enter last name");
}
if(empty($country)){
	array_push($errors,"Select country");
}
if(empty($subject)){
	array_push($errors,"enter the subject");
}

if(count($errors)==0){
	$query = "INSERT into contact (fname, lname, country,Subject)
VALUES ('$fname', '$lname','$country','$subject')";
	$result = mysqli_query($con,$query);
	if($result){
echo "THANKS FOR CONTACTING US. WE SHALL GET YOU SHORTLY";
}else{

echo "error";
}


		}
	}
?>


  <div class="container" >
    <form method="POST"><br>
<?php include 'errors.php'; ?>
      <label for="fname">First Name</label>
      <input type="text" id="fname" name="fname" placeholder="Your name..">

      <label for="lname">Last Name</label>
      <input type="text" id="lname" name="lname" placeholder="Your last name..">

      <label for="country">country</label>
      <select id="country" name="country">
				<option value="SELECT"> SELECT FROM THE LIST</option>
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

      <label for="subject">Subject</label>
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

      <input type="submit" name="submit" value="Submit" style="color:backslashes; background-color:darkcyan" />

    </form>
  </div><br><br>




</div>


	<div class="nav_down">
		<div>
		 &copy;UGANDA CHRISTIAN UNIVERSITY , site designed & developed by KATUMBIRE BOB BELLS
		</div>
	</div>
