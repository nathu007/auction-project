<?php
include 'header.php';
if(isset($_GET['edit_item']))
{
  $id=$_GET['edit_item'];
}
else
{
  header("LOCATION: ../index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit item - Univarsal Auction</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
  <div class="container-fluid">
  	<div class="jumbotron"> 
  		<h1 class="text-center">Edit Product</h1>
  	</div>
 </div>
 
 <div class="container">



<!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
<div class="row">
  <div class="col-xs-4 col-md-3"></div>
  <div class="col-xs-10 col-md-6 bg-primary">

    <?php
include '../db.php';
    $query = "SELECT `id`, `start_time`, `end_time`, `image`, `description`, `category`, `item_title`, `min_bid` FROM `auction_item` WHERE `id` = '".$id."'";  

    $result = mysqli_query($con, $query);  
              echo mysqli_error($con);
    $row = mysqli_fetch_array($result);
    $item_title=$row['item_title'];
    $Description=$row['description'];
    $min_bid=$row['min_bid'];
    $start_time=$row['start_time'];
    $end_time=$row['end_time'];
         
    ?>
  	
    <form id="sell-form" method="post" action="" enctype="multipart/form-data"  role="form" style="display: block;"> <br>
    								<div class="form-group">
										<input type="text" value="<?php echo $item_title; ?>" name="auction_title" tabindex="1" class="form-control" placeholder="Auction title" value="" required>
									</div>
								    <div class="form-group"> 
									    <select name="auction_category" class="form-control" >
                                         <option value="vehicle">Vehicle</option>
                                         <option value="electronics">Electronics</option>
                                         <option value="antic">antic</option>
                                       </select> 

								    </div>
                                                                
                                                                <div class="form-group">
										<textarea type="text" name="auction_description" tabindex="1" class="form-control" placeholder="Description"  required><?php echo $Description; ?></textarea>
									</div>
                                                              
                                                                  <div class="form-group">
										<input type="number" step="any" value="<?php echo $min_bid; ?>" name="starting_price" id="startingprice" tabindex="1" class="form-control"  placeholder="Minimum Price $" value="" required>
									</div>
									
									               <div class="form-group">
                                         <label class="control-label">Auction start</label>
                                         <div class='input-group date' id='datetimepicker1'>
                     					<input type='text' value="<?php echo $start_time; ?>" class="form-control" name="auction_start" />
                     					<span class="input-group-addon">
                     					<span class="glyphicon glyphicon-calendar"></span>
                     					</span>
                  						</div>
               							</div>
 

									               <div class="form-group">
                  						<label class="control-label">Auction End</label>
                  						<div class='input-group date' id='datetimepicker12'>
                     					<input type='text' value="<?php echo $end_time; ?>" class="form-control" name="auction_end" placeholder="copy from Starting time then change" />
                     					<span class="input-group-addon">
                     					<span class="glyphicon glyphicon-calendar"></span>
                     					</span>
                  						</div>
               							</div>
 
			
								        
										
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="submit" id="submit" tabindex="4" class="form-control btn btn-login" value="submit">
											</div>
										</div>
									</div>
                                                                     
								</form>

  </div>
  <div class="col-xs-4 col-md-2"></div>
</div>

<!-- Columns are always 50% wide, on mobile and desktop -->

 </div>
 <script>
  $(function () {
    $('#datetimepicker1').datetimepicker();
 });
  $(function () {
    $('#datetimepicker2').datetimepicker();
 });
</script>

</body>
</html>



<?php 
include '../db.php';
$name=$_SESSION['name'];
    if(isset($_POST['submit'])){
                 $auction_title = $_POST['auction_title'];
                 $auction_category = $_POST['auction_category'];
                 $auction_description = $_POST['auction_description'];
                 $starting_price = $_POST['starting_price'];
                 $auction_start = $_POST['auction_start'];
                 $auction_end = $_POST['auction_end'];

    $query = "UPDATE `auction_item` SET `start_time`='".$auction_start."',`end_time`='".$auction_end."',`description`='".$auction_description."',`category`='".$auction_category."',`item_title`='".$auction_title."',`min_bid`='".$starting_price."',`uname`='".$name."' WHERE `id` = '".$id."'";  
                
                $result = mysqli_query($con, $query);  
                echo mysqli_error($con);
                echo '
                 <script>alert("your data is successfully updated")</script> 
                ';
}
include 'footer.php'; 
?>

