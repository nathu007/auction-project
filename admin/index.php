<?php
                    session_start();
          if(isset($_SESSION['admin_name']  ))  {
   
  header("LOCATION:home.php");

  }
else
{
	echo " ";
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Home - admin</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div>
	<br>
	<br>
<div class="row"  >
  <div class="col-xs-6 col-md-4"></div>

  <div class="col-xs-6 col-md-4 bg-primary">
  	<h1 class="text-center">Admin Login</h1>
  	<form role="form" action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="name" name="username" required="required" style="width: 400px;" class="form-control" placeholder="Enter Username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" required="required" style="width: 400px;" class="form-control" placeholder="Password">
  </div>
  
  
  <button type="submit" name="submit" class="btn btn-default">Submit</button>
</form>
  </div>
  <div class="col-xs-6 col-md-4"></div>
</div>
</div>

<?php
if(isset($_POST['submit'])){        
         
        $con = mysqli_connect("localhost","root","","project");    
  
        $username=$_POST['username'];
        $password=$_POST['password']; 
  
         
        $qry="SELECT * FROM `admin_signup` WHERE name='".$username."'";
        $result=mysqli_query($con,$qry);
        $row=mysqli_fetch_array($result);


         echo mysqli_error($con);      

        if ($row['password']==$password){
          
         session_start();
        $_SESSION['admin_name'] = $username;
        $_SESSION['admin_email'] = $row['email'];

          header("LOCATION:home.php");
         } 
         else {
         echo "Username or Password is invalid";
        //header("LOCATION:fake.php");
         }
         
  
     
}

     
       ?>

<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>


