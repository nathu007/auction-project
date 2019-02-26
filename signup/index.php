<?php
include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
  
  


<title>Sign up</title>
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
        <h3>Signup</h3>
        
        <div class="login-form">
          <form action="#" method="post">
          	

            <input type="text" name="name" placeholder="Username" required="required">
            <input type="email" name="email" placeholder="E-mail" required="required">
            <span id="email_error"></span>
            <input type="password" name="password" id="password" placeholder="Password" required="required">
            <input type="password" name="password2" id="password2" onkeyup="checkPass(); return false;" placeholder="Confirm Password" required="required">
            <span id="confirmMessage" class="confirmMessage"></span>
            <input type="submit" value="SIGNUP" id="submit" name="submit">
            </form>
        </div>
        <style type="text/css">
        	h4 {
        		color: red;
        	}
        </style>
        <?php
                   
                  date_default_timezone_set('Asia/Kolkata');
                 $con = mysqli_connect("localhost","root","","project");
                 
                 
                 if(isset($_POST['submit'])){
                 $option = "bidder";
                 $uname = $_POST['name'];
                 $uemail = $_POST['email'];
                 $upass = $_POST['password2'];

                 if ($option == "bidder") {
                 	
                 

                   	$sql_e = "SELECT * FROM signup WHERE uemail='$uemail'";

                   	  	$res_e = mysqli_query($con, $sql_e);

                   	  	if(mysqli_num_rows($res_e) > 0){
  	  $email_error = "Sorry... email already taken"; 
      echo "<h4> Sorry... email already taken </h4>";
  	}else{


                 
         $sql="INSERT INTO signup (date,time,uname,uemail,upass) VALUES (CURDATE(),CURTIME(),'".$uname."','".$uemail."','".$upass."')";
                 $result=mysqli_query($con,$sql);
                echo "<script type='text/javascript'>window.top.location='../login/index.php';</script>"; 
     
                 }
                 } 
                   
                
else {
		
                
                 }

 }


                ?>
        
        <p><a href="#"> By clicking register, I agree to your terms</a></p>
      </div>
    </div>
    
    <div class="clear"></div>
    <!--//signin-form-->  
    <script type="text/javascript">
    	function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('password');
    var pass2 = document.getElementById('password2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
                document.getElementById( 'submit' ).disabled= false;

    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Is mitshmash!"
        document.getElementById( 'submit' ).disabled='true';
    }
}  
    </script>
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





