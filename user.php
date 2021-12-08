<?php   include 'CONNECT.PHP';

if (isset($_POST['submit'])){
   $name=$_POST['name'];
   $Email=$_POST['Email'];
   $country=$_POST['country'];

$sql="insert into reg (name,Email,country) values ( '$name','$Email','$country')";
$result=mysqli_query($con,$sql);
if ($result){
  echo "data inserted successfully";
}else {
  die(mysqli_error($con));
 }
}
 ?>
<!DOCTYPE html>
<html lang=" " dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>crude operation</title>
  </head>
  <body>
    <div class="container">
      <div class="tale" ><br><br>
      	<h3 > <p  style="text-align: center;" >EDIT  FORM</p></h3><br>

          <form action="" method="post"><br>

            <label for="name" >Name</label>
            <input type="text" id="name" name="name" placeholder="Your name.."><br>

            <label for="Email">EMAIL</label><br>
            <input type="email" id="lname" name="Email" placeholder="Your Email.."><br>

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


            </select><br>
           <input type="submit" name="Submit" VALUE="SUBMIT">
          </form>
      <br><br>

      </div>

    </div>
  </body>
</html>
