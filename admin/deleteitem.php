<?php
include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete item</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
  <div class="container">
  	<div class="jumbotron">
  		<h1> Delete item</h1>
  	</div>
  	<table class="table">
<thead>
<tr>
<th>#</th>
<th>Product name</th>
<th>Product category</th>
<th>Product owner</th>
<th>Maximum Bid</th>
<th>Delete</th>
</tr>
</thead>
<tbody>
<?php
include '../db.php';
  	$query = "SELECT `id`, `start_time`, `end_time`, `image`, `description`, `category`, `item_title`, `min_bid` FROM `auction_item` WHERE 1";  
                
                $result = mysqli_query($con, $query);  
                echo mysqli_error($con);
                while($row = mysqli_fetch_array($result)){
                	echo '
                
                <tbody>
<tr>
<th scope="row">'.$row['id'].'</th>
<td>'.$row['item_title'].'</td>
<td>$'.$row['category'].'</td>
<td>nathu</td>
<td>'.$row['min_bid'].'</td>
<form action="" method="post" >
<input name="uid" value="'.$row['id'].'" type="hidden" >
<td><input class="btn btn-primary" name="delete" type="submit" role="button" value="delete"></td>
</form>
</tr>


</tbody>

                               ';

                  }
  	?>
</tbody>
</table>
  </div>

<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>

<?php
include 'footer.php';
if (isset($_POST['delete'])) {
     $pid=$_POST['uid'];
$query = "DELETE FROM `auction_item` WHERE `id` = '".$pid."'";  
                
                $result = mysqli_query($con, $query);  
                echo mysqli_error($con);
                header("LOCATION:deleteitem.php");
}

?>