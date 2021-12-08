<!DOCTYPE html>
<html>
<head>
 <title>Shortlearner.com</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<center><form method="post" action="">

 <select name="month" >
 <option value="01">Jan</option>
 <option value="02">Feb</option>
 <option value="03">March</option>
 <option value="04">April</option>
 <option value="05">May</option>
 <option value="06">Jun</option>
 <option value="07">July</option>
 <option value="08">Aug</option>
 <option value="09">Sep</option>
 <option value="10">Oct</option>
 <option value="11">Nov</option>
 <option value="12">Dec</option>
 </select>
 <select name="year" >
 <option value="2018">2018</option>
 <option value="2019">2019</option>
 <option value="2020">2020</option>
 <option value="2021">2021</option>
 <option value="2022">2022</option>
 <option value="2023">2023</option>
 <option value="2024">2024</option>
 <option value="2025">2025</option>
 <option value="2026">2026</option>
 <option value="2027">2027</option>
 </select>
 <input type="submit" name="submit" class="btn btn-danger">
</form>
</table>
<table>
 <th><table class="table table-bordered bordered table-striped table-condensed datatable table-responsive" style="font-size:0.8vw; ">
<thead>
 <div class="col-sm-1">   <th>S</th></div>
 <div class="col-sm-1">   <th>M</th></div>
 <div class="col-sm-1">   <th>T</th></div>
 <div class="col-sm-1">   <th>W</th></div>
 <div class="col-sm-1">   <th>T</th></div>
 <div class="col-sm-1">   <th>F</th></div>
 <div class="col-sm-1">   <th>S</th></div>
</thead>
 <tbody style="text-align:center;">
<tr>
 <?php
if(isset($_POST['submit']))
{
 $month= $_POST['month'];

$year=$_POST['year'];
$day='01';
$endDate=date("t",mktime(0,0,0,$month,$day,$year));
  $s=date ("w", mktime (0,0,0,$month,1,$year));
for ($ds=1;$ds<=$s;$ds++) {
echo "<td style=\"font-family:arial;color:#B3D9FF\" align=center valign=middle bgcolor=\"#FFFFFF\">
</td>";}
for ($d=1;$d<=$endDate;$d++) {
if (date("w",mktime (0,0,0,$month,$d,$year)) == 0) { echo "<tr>"; }
$fontColor="#000000";
if (date("D",mktime (0,0,0,$month,$d,$year)) == "Sun")
 { $fontColor="red";
echo "<td style=\"font-family:arial;color:#333333\" align=center valign=middle> <span style=\"color:$fontColor\">$d</span></td>";
}
else
 { $fontColor="green";
echo "<td style=\"font-family:arial;color:#333333\" align=center valign=middle> <span style=\"color:$fontColor\">$d</span></td>";
}
if (date("w",mktime (0,0,0,$month,$d,$year)) == 6) { echo "</tr>"; }}
}
 ?>

 </tr>
</tbody>

</table>
</center>
<div style="padding-left:650px;">

    <button type="button" name="button"><a href="admin.php">ADMIN PAGE</a></button>

</div>
</body>
</html>
