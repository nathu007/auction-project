<?php
include 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Items</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
  <div class="container">
  	<div class="jumbotron">
  		<h1 class="text-center">Your Products</h1>
  	</div>

  	<table class="table">
<thead>
 <tr>
<th>#</th>
<th>Product Name</th>
<th>Category</th>
<th>Start Time</th>
<th>End Time</th>
<th>Minimum Bid</th>
<th>Activity</th>
</tr>
</thead>
<tbody>
<?php
include '../vender/db.php';
          if(isset($_SESSION['name']  ))  {
          	$name=$_SESSION['name'];
    $time=date("y-m-d h:i:s");
  $query = "SELECT `id`, `start_time`, `end_time`, `image`, `description`, `category`, `item_title`, `min_bid`, `uname` FROM `auction_item` WHERE `uname` = '".$name."' AND `start_time`> NOW() ";  
                
                $result = mysqli_query($con, $query);  
                echo mysqli_error($con);
                while($row = mysqli_fetch_array($result))
                {
                	
                
                
               
                 echo '
                	<tr>
<th scope="row">'.$row['id'].'</th>
<td>'.$row['item_title'].'</td>
<td>'.$row['category'].'</td>
<td>'.$row['start_time'].'</td>
<td>'.$row['end_time'].'</td>
<td>'.$row['min_bid'].'</td>
<td><a href="index.php?auction_id='.$row['id'].'"><li class="btn btn-primary">View</li></a></td>
<td><a href="itemedit.php?edit_item='.$row['id'].'"><li class="btn btn-success">Edit</li></a></td>
<td><a href="itemdelete.php?delete_item='.$row['id'].'"><li class="btn btn-danger">Delete</li></a></td>
</tr>
                      ';
                }
  }

 else{ 
    
echo '
  header("LOCATION: ../login/index.php")
  ';

}
?>
</tbody>
</table>
</div>

<script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>

<?php
include 'footer.php';
?>