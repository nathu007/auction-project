<?php

$con = mysqli_connect("localhost","root","","project");

session_start();

$user_check=$_SESSION['login_user'];

$qry="select uemail from login where uemail='".$user_check."'";

$run=mysqli_query($con,$qry);

$row = mysql_fetch_assoc($run);
$login_session =$row['uemail'];

if(!isset($login_session)){

echo "<script type='text/javascript'>window.top.location='index.php';</script>"; exit;
}

?>