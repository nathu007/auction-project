
<?php
session_start();
          if(isset($_SESSION['name']  ))  {

 $con = mysqli_connect("localhost","root","","project");    
  date_default_timezone_set('Asia/Kolkata');
if(isset($_POST['id']))
{
$sql="SELECT * FROM `auction_item` WHERE id='".$_POST['id']."'";
$_POST['id'];
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
$endtime=$row['end_time'];
$endtime=strtotime($endtime);
$current_time=strtotime(date("y-m-d h:i:s"));
$date = date('Y-m-d H:i:s');

if($endtime>$current_time){

$sql="SELECT * FROM `bid` WHERE `auction_id`='".$_POST['id']."' ORDER BY id DESC limit 1";
$result=mysqli_query($con,$sql);
echo mysqli_error($con);
$row=mysqli_fetch_array($result);

if($row['bid']<$_POST['bid'])
{

	$sql="INSERT INTO `bid` (`id`, `time`, `uname`, `uemail`, `bid`, `auction_id`) VALUES (NULL, '".$date."', '".$_SESSION['name']."', '".$_SESSION['email']."', '".$_POST['bid']."', '".$_POST['id']."')";

mysqli_query($con,$sql);
echo mysqli_error($con);
}
$r="LOCATION:index.php?auction_id=".$_POST['id'];
header($r);


}

$r="LOCATION:index.php?auction_id=".$_POST['id'];
header($r);
}
else{
	echo '
     <script type="text/javascript">alert("Hello! I am an alert box!!");</script>
	';
}
}
else {
	header("LOCATION:../login/index.php?history='".$id."'");
	}
	?>
