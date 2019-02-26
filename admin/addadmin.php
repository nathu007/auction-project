<?php
include 'header.php';
?>



<!DOCTYPE html>
<html>
<head>
	<title>Home - admin</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
  <div class="container">
  <div class="jumbotron">
      <h1 class="text-center"> Add New Admin </h1>
    </div>
  </div>
<div>
	<br>
	<br>
<div class="row">
  <div class="col-xs-6 col-md-4"></div>
  <div class="col-xs-6 col-md-4 bg-danger">
  	<form role="form" action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    <input type="name" style="width: 400px;" name="name" class="form-control" placeholder="Enter Username">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" style="width: 400px;" name="email" class="form-control" placeholder="Enter Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" style="width: 400px;" name="password" class="form-control" placeholder="Password">
  </div>
  
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
  <div class="col-xs-6 col-md-4"></div>
</div>
</div>

<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>

<?php
 date_default_timezone_set('Asia/Kolkata');
 $con = mysqli_connect("localhost","root","","project");
    if(isset($_POST['submit'])){
                 $name = $_POST['name'];
                 $email = $_POST['email'];
                 $password = $_POST['password'];
                 
                  $sql="INSERT INTO admin_signup (date,time,name,email,password) VALUES (CURDATE(),CURTIME(),'".$name."','".$email."','".$password."')";
                 $result=mysqli_query($con,$sql);
                 echo '
                 <script>alert("'.$name.' Added as admin");</script>
                 ';
             }
?>
<?php
include 'footer.php';
?>