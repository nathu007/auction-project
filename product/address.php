<?php
include 'header.php';
?>
<?php
if(isset($_GET['add']))
{
  $pid=$_GET['add'];
}
else{
  header("LOCATION:../login/index.php");
}
if(isset($_SESSION['name']  ))  {

    
}
else
{
   header("LOCATION:../login/index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Place Order</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/shop-homepage.css">
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="jumbotron"> 
    <h1 class="text-center">Order Address</h1>
    <p>First of all Send Auction item Money to this bitcoin address : 546g5yhyh5yhgergf43ff45tf4t54</p>
    <p>Then We are send Auction Product to Your Adddress</p>
	</div>

	<div class="row">
		<div class="col-xs-4 col-md-3"></div>
		<div class="col-xs-10 col-md-6 bg-success">
        <h2 class="text-center">Address</h1>
        	<form role="form" method="post" action="">
        		<div class="form-group">
        			<input type="hidden" name='pid' value="<?php echo $pid; ?>" >
        		    <label for="exampleInputName1">Name :</label>
        		    <input type="name" name="name" required="required" >
        	    </div>
        	    <div class="form-group">
        		    <label for="exampleInputEmail1">Email :</label>
        		    <input type="email" name="email">
        	    </div>
        	    <div class="form-group">
        		    <label for="exampleInputPhone1">Phone Number :</label>
        		    <input type="text" maxlength="10" name="phone" required="required" >
        	    </div>
        	    <div class="form-group">
        		    <label for="exampleInputaddress1">Address Line 1 :</label>
        		    <input type="text" maxlength="100" name="address1" required="required" ></input>
        	    </div>
        	    <div class="form-group">
        		    <label for="exampleInputaddress1">Address Line 2 :</label>
        		    <input type="text" maxlength="100" name="address2" required="required" ></input>
        	    </div>
        	    <div class="form-group">
        		    <label for="exampleInputCity1">City :</label>
        		    <input type="text" maxlength="30" name="city" required="required" >
        	    </div>
        	    <div class="form-group">
        		    <label for="exampleInputPin1">Pincode :</label>
        		    <input type="text" maxlength="6" name="pincode" required="required" >
        	    </div>
        	    <input type="submit" name="submit" class="btn btn-primary">
        	    <hr>
        	</form>

		</div>
	    <div class="col-xs-5 col-md-2 text-center"></div>
		
	</div>
</div>



</body>
</html>
<?php
include '../db.php';
if (isset($_POST['submit'])) {

	$pid = $_POST['pid'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$add1 = $_POST['address1'];
	$add2 = $_POST['address2'];
	$city = $_POST['city'];
	$pincode = $_POST['pincode'];
    $wname = $_SESSION['name'];

	 $sql="INSERT INTO `cust_address`(`pid`, `name`, `email`, `phone`, `add1`, `add2`, `city`, `pincode`,`wname`) VALUES ('".$pid."', '".$name."', '".$email."', '".$phone."', '".$add1."', '".$add2."', '".$city."','".$pincode."','".$wname."')";

    $result=mysqli_query($con,$sql);
    echo mysqli_error($con); 

    header("LOCATION:../index.php");

}

?>

<?php
include 'footer.php';
?>