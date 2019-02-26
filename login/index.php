<?php
include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
  
  


<title>Log In</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Register" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Jura:400,300,500,600' rel='stylesheet' type='text/css'>
<!--//web-fonts-->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

   
  <!-- main -->
  <div class="main">
    <div class="w3">
      <div class="signin-form profile">
        <h3>Login</h3>
        
        <div class="login-form">
          <form action="" method="post">
           
            <input type="text" name="username" placeholder="Username" required="required">
            
            <input type="password" name="password" id="password" placeholder="Password" required="required">
            
            <input type="submit" value="LOGIN" id="submit" name="submit">
			<span id="error"></span>
            </form>
        </div>
        <style type="text/css">
          h4 {
            color: red;
          }
        </style>
       
        
        <p><a href="#"> By clicking register, I agree to your terms</a></p>
      </div>
    </div>
    
    <div class="clear"></div>
    <!--//signin-form-->  
   
  </div>

  
  </div>          

   <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>
</html>

<?php
include 'footer.php';
?>

<?php
if(isset($_POST['submit'])){        
         
        $con = mysqli_connect("localhost","root","","project");    
  
        $username=$_POST['username'];
        $password=$_POST['password']; 
  
         
        $qry="SELECT * FROM `signup` WHERE uname='".$username."'";
        $result=mysqli_query($con,$qry);
        $row=mysqli_fetch_array($result);


         echo mysqli_error($con);      

        if ($row['upass']==$password){
          
           session_start();
        $_SESSION['name'] = $username;
        $_SESSION['email'] = $row['uemail'];
         
          echo "<script type='text/javascript'>window.top.location='../index.php';</script>"; 
     
         } 
         else {
         echo "<script type='text/javascript'>alert('invalid username or password try again..')</script>
		 "; 
        //header("LOCATION:fake.php");
         }
         
  
     
}

     
       ?>



