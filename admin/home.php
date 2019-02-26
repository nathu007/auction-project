<?php
include 'header.php';
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
  		<h1 class="text-center">Bidding</h1>
  	</div>

  	<table class="table">
<thead>
 <tr>
<th>#</th>
<td>User Name</td>
<th>Bid time</th>
<th>Bid Price</th>
<th>View</th>
</tr>
</thead>
<tbody>
<?php
include '../db.php';
          //if(isset($_SESSION['name']  ))  {
          	//$name=$_SESSION['name'];
    
  $query = "SELECT `id`, `time`, `uname`, `uemail`, `bid`, `auction_id` FROM `bid` WHERE 1 ";  
                
                $result = mysqli_query($con, $query);  
                echo mysqli_error($con);
                while($row = mysqli_fetch_array($result))
                {
                	 $id1=$row['auction_id'];
                	$id=$row['auction_id'];
                	$query1 = "SELECT `id`, `start_time`, `end_time`, `image`, `description`, `category`, `item_title`, `min_bid` FROM `auction_item` WHERE `id` = '".$id1."' ";  
                
                $result1 = mysqli_query($con, $query1);  
                $row1 = mysqli_fetch_array($result1);
                $title=$row1['item_title'];
                $pid=$row1['id'];
               
                 echo '
                	<tr>
<th scope="row">'.$row['id'].'</th>
<td>'.$row['uname'].'</td>
<td>'.$row['time'].'</td>
<td>'.$row['bid'].'</td>
<td><a href="../product/index.php?auction_id='.$row['auction_id'].'"><li class="btn btn-primary">View</li></a></td>
</tr>
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