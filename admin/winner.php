<?php
include 'header.php';
?>

<?php
include '../db.php';


?>
<!DOCTYPE html>
<html>
<head>
	<title>Winner</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
  <div class="container">
  	<div class="jumbotron">
  		<h1 class="text-center"> Winners</h1>
  	</div>

  	<table class="table">
<thead>
<tr>
<th>#</th>
<th>Winner Name</th>
<th>Email</th>
<th>Phone</th>
<th>Add1</th>
<th>Add2</th>
<th>City</th>
<th>Pincode</th>
</tr>
</thead>
<?php
  	$query = "SELECT `pid`, `name`, `email`, `phone`, `add1`, `add2`, `city`, `pincode`, `wname` FROM `cust_address` WHERE 1";  
                
                $result = mysqli_query($con, $query);  
                echo mysqli_error($con);
                while($row = mysqli_fetch_array($result)){
                	echo '
                
                <tbody>
<tr>
<th scope="row">'.$row['pid'].'</th>

<td>'.$row['name'].'</td>
<td>'.$row['email'].'</td>
<td>'.$row['phone'].'</td>
<td>'.$row['add1'].'</td>
<td>'.$row['add2'].'</td>
<td>'.$row['city'].'</td>
<td>'.$row['pincode'].'</td>

</tr>


</tbody>

                               ';

                  }
  	?>

</table>
  </div>

<script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>

<?php
include 'footer.php';
?>
