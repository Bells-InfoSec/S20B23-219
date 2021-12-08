<!DOCTYPE html>
<html>
<head>
 <title></title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="style.css" type="text/css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>


 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

</head>
<body>

 <div class="container1">
         <div class="col-lg-12">
         <br><br>
         <h1 class="text-warning text-center" > Display Table Data </h1>
         <br>
             <table  id="tabledata" class=" table table-striped table-hover table-bordered" style="border:1px solid black;"  >

             <tr class="bg-dark text-white text-center" style="border:1px solid black;">

             <th> Id </th>
             <th> name </th>
             <th> Email</th>
             <th> country</th>
             <th> Delete </th>
             <th> Update </th>

             </tr >

             <?php

             include 'con.php';
             $q = "select * from reg ";

             $query = mysqli_query($con,$q);

             while($res = mysqli_fetch_array($query)){
             ?>
                      <tr class="text-center">
                            <td> <?php echo $res['id'];  ?> </td>
                            <td> <?php echo $res['name'];  ?> </td>
                            <td> <?php echo $res['Email'];  ?> </td>
                            <td> <?php echo $res['country'];  ?> </td>
                            <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>
                            <td> <button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white"> Update </a> </button> </td>

                      </tr>

             <?php
             }
              ?>

             </table>

 </div>
 </div>

 <script type="text/javascript">

 $(document).ready(function(){
 $('#tabledata').DataTable();
 })

 </script>

</body><br><br><br><br>
<div style="padding-left:650px;">

    <button type="button" name="button"><a href="admin.php">ADMIN PAGE</a></button>

</div>
</html>
