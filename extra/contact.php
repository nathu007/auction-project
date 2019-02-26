<?php
include 'header.php';
?>

<!DOCTYPE html>
<html>
<head>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/shop-homepage.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js "></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js "></script>
<![endif]-->
<!-- YOU NEED THIS REFERENCE TO BE ABLE TO GET FONTAWESOME 4 ICONS TO THIS SNIPP -->
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>

</head>
<body>


  <div style="margin-left: 90px;">
    <form action="" method="POST">
    <div style="width: 1180px; height: 600px; margin-top: 40px; background-color: rgb(240, 240, 240);">
      <div style="height: 600px; width: 600px; background-color: blue; margin-top: 40px; margin-left: 250px;">
      <div style="height: 40px; background-color: black"><h1 style="text-align: center; color: white;">Feedback</h1></div> 
        <p style="margin-left: 10px; font-family: verdana; color: white;">For any queries please contact us at support@localhost.com or use the contact form below.</p>
        <span style="margin-left: 80px; margin-top: 60px; color: white; font-family: verdana;">Full Name:*</span><br>
        <input class="in_name" type="text" name="name" placeholder="Enter your Name" required="required"> 
        <span style="margin-left: 80px; margin-top: 60px; color: white; font-family: verdana;">E-mail:*</span><br>
        <input class="in_name" type="email" name="email" placeholder="E-mail" required="required"> 
        <span style="margin-left: 80px; margin-top: 60px; color: white; font-family: verdana;">Subject:</span><br>
        <input class="in_name" type="text" name="subject" placeholder="Subject"> 
        <span style="margin-left: 80px; margin-top: 60px; color: white; font-family: verdana;">Message:*</span><br>
        <textarea class="in_name" style="height: 90px;" type="message" name="message" placeholder="message*" required="required"></textarea> 
        <input type="submit" name="submit" class="sub" value="SUBMIT">
        </form>
    </div>

<?php

 $con = mysqli_connect("localhost","root","","project");
                 
                 
                 if(isset($_POST['submit'])){
                 $name = $_POST['name'];
                 $email = $_POST['email'];
                 $subject = $_POST['subject'];
                 $message = $_POST['message'];

            $sql="INSERT INTO feedback (name,email,subject,message) VALUES ('".$name."','".$email."','".$subject."','".$message."')";
                 $result=mysqli_query($con,$sql);

}
?>




</div>

  </div>




<style type="text/css">
  .sub {
    background-color: rgb(208, 131, 207); border: none; border-radius: 4px; padding: 10px; margin-left: 80px;
  }
  .sub:hover {
    background-color: black;
    color: white;
  }
  .in_name {
    margin-left: 80px; width: 400px; font-size: 14px; border-radius: 0; font-family: inherit; display: block; height: 34px; border: 2px solid #eee;border-radius: 5px; margin-bottom: 30px;
  }
  .in_name:hover {
    border-color: rgb(208, 131, 207);
  }
  .footer_1 {
  padding: 90px;
  background-color: rgb(60, 60, 60);
  margin-top: 50px;
}
.footer_up {
 color: white;
 margin-top: -80px;
 padding: 5px 5px 10px 5px;
 width: 330px;
 text-align: center;
 text-decoration: none;
}
.footer_side1 {
   padding: 5px 5px 10px 5px;
   width: 330px;
  text-align: center;
  margin-top: -158px;
  margin-left: 340px;
}
.footer_side2 {
   padding: 5px 5px 10px 5px;
   width: 330px;
  text-align: center;
  margin-top: -158px;
  margin-left: 680px;
}
.col_b {
  color: black;
}
</style>

    

</body>
</html>
<?php
include 'footer.php';
?>