<?php
include 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Feedback</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
  <div class="container">
  	<div class="jumbotron">
  		<h1 class="text-center">User Feedback</h1>
  	</div>
  	<table class="table">
<thead>
<tr>
<th>#</th>
<th>Name</th>
<th>Email</th>
<th>Subject</th>
<th>Message</th>
</tr>
</thead>
<tbody>
<?php
include '../db.php';
$query = "SELECT `id`, `name`, `email`, `subject`, `message` FROM `feedback` WHERE 1";  
                
                $result = mysqli_query($con, $query);  
                echo mysqli_error($con);
                while($row = mysqli_fetch_array($result))
                {
                	echo '
                     <tr>
<th scope="row">'.$row['id'].'</th>
<td>'.$row['name'].'</td>
<td>'.$row['email'].'</td>
<td>'.$row['subject'].'</td>
<td>'.$row['message'].'</td>
</tr>
                	';
                } 
                	?>
<tbody>

</tbody>
</table>
  </div>

<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>


<?php
include 'footer.php';
?>