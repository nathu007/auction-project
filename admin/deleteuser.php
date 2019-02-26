<?php
include 'header.php';
include '../vender/db.php';

if(isset($_POST['delete']))
{
	$sql="DELETE FROM `signup` WHERE `signup`.`uid` = '".$_POST['uid']."'";
	mysqli_query($con,$sql);
   echo '
                 <script>alert("User has been deleted Successfully from System");</script>
                 ';

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete User</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
  <div class="container">
  	<div class="jumbotron">
  		<h1 class="text-cener"> Delete User</h1>
  	</div>

  	<table class="table">
<thead>
<tr>
<th>#</th>
<th>Name</th>
<th>Email</th>
<th>Delete</th>
</tr>
</thead>
<?php
  	$query = "SELECT `uid`, `date`, `time`, `uname`, `uemail`, `upass` FROM `signup` WHERE 1";  
                
                $result = mysqli_query($con, $query);  
                echo mysqli_error($con);
                while($row = mysqli_fetch_array($result)){
                  $uname = $row['uname'];
                	echo '
                
                <tbody>
<tr>
<th scope="row">'.$row['uid'].'</th>
<td>'.$row['uname'].'</td>
<td>'.$row['uemail'].'</td>
<form action="" method="post" >
<input name="uid" value="'.$row['uid'].'" type="hidden" >
<td><input class="btn btn-primary" name="delete" type="submit" role="button" value="delete"></td>
</form>
</tr>


</tbody>

                               ';

                  }
  	?>

</table>
  </div>

<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>

<?php
include 'footer.php';
?>