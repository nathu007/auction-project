<?php
include 'header.php';
if(isset($_GET['auction_id']))
{
  $id=$_GET['auction_id'];
}
else{
  header("LOCATION: ../index.php");
}
?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/shop-homepage.css">
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</head>
<body>

  



  <?php
  $con = mysqli_connect("localhost","root","","project"); 
  $sql="SELECT * FROM `auction_item` WHERE id='".$id."'";
  $result=mysqli_query($con,$sql);
  echo mysqli_error($con);
  $ro=mysqli_fetch_array($result);
  $image="../".$ro['image'];
  $Description=$ro['description'];
  $title=$ro['item_title'];
  $end=$ro['end_time'];
  $sql="SELECT * FROM `bid` WHERE auction_id='".$id."' ORDER BY id DESC limit 5";
  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_array($result);

   

  ?>
    
    <div class="container">
      <div class="row">
         <div class="col-xs-4 col-md-3">
          <img src="<?php echo $image;?>" style="height: 250px; width: 250px;"><br>
          <br>
          <p style="color: green;" class="text-center"><?php echo $title; ?></p>
         </div>
  <div class="col-xs-10 col-md-6 bg-primary">
    <br>
    <div class="row">
        <div class="col-xs-8 col-md-5 text-center">
            <p>Final Sales price:</p>
        </div>
        <div class="col-xs-5 col-md-7 text-center">
            <p style="font-size: 18px;">$<?php echo $row['bid']; ?></p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-xs-8 col-md-5 text-center">
            <p>Highest Bidder:</p>
        </div>
        <div class="col-xs-5 col-md-7 text-center">
            <p style="font-size: 16px;"><?php echo $row['uname']; ?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-8 col-md-5 text-center">
            <img src="profile.jpg">
        </div>
     <div class="col-xs-5 col-md-7 text-center">
            
        </div>
    </div>
    <hr>
    <table class="table">
      <thead>
<tr>
<th>Time</th>
<th>Name</th>
<th>Price</th>
</tr>
</thead>
<tbody>

   <?php


      echo "<tr>
  <td>".$row['time']."</td>
  <td>".$row['uname']."</td>
  <td>".$row['bid']."</td>
</tr>"; 
    while($row1=mysqli_fetch_array($result))
    { 
      echo "<tr>
  <td>".$row1['time']."</td>
  <td>".$row1['uname']."</td>
  <td>".$row1['bid']."</td>
</tr>";
      }
      ?>

</tbody>
    </table>
    <hr>
    <h1 class="text-center text-danger"><?php echo $end;?></h1>
     <div class="row">
        <div class="col-xs-4 col-md-10 text-center">
    <?php
    $curr_timestamp = date('Y-m-d H:i:s');

          $query2 = "SELECT `id`, `start_time`, `end_time`, `image`, `description`, `category`, `item_title`, `min_bid` FROM `auction_item` WHERE `id` ='".$id."'";  
                
                $result2 = mysqli_query($con, $query2);  
                echo mysqli_error($con);
                $row2 = mysqli_fetch_array($result2);
                if ($row2['end_time']<$curr_timestamp) {
                  $query3="SELECT `id`, `time`, `uname`, `uemail`, `bid`, `auction_id` FROM `bid` WHERE `bid` = ".$row['bid']."";
                    $result3 = mysqli_query($con, $query3);  
                echo mysqli_error($con);
                $row3 = mysqli_fetch_array($result3);
                  $win=$row3['uname'];
                  echo '
                  <p style="font-size: 20px;">Winner : '.$win.'</p>
                  ';
                   $sname = $_SESSION['name'];
                  if($sname == $win )
                  {
                    echo '
                      <p><a class="btn btn-success" href="address.php?add='.$id.'" role="button">Place order</a></p>
                    ';
                  }
                }
                else
                {
                  echo '
               <form method="post" action="add_bid.php" >
       <input class="in" name="bid" style="color: black; width: 60px; " type="number" required="required">
                  ';
                }
                ?>
    
          
           
      <input type="hidden" name='id' value="<?php echo $id; ?>" >
      <input type="submit" name="submit" value="BID" class="btn btn-danger" href="nathu.php"> 
      </form>
     <br>
        </div>
        <div class="col-xs-5 col-md-2 text-center">
            
        </div>
    </div>

  </div>
  <div class="col-xs-4 col-md-2"></div>
      </div>
    </div>  

  
<div style="height: 300px; width: 1180px; background-color: rgb(240, 240, 240); margin-top: 80px; margin-left: 90px;">
  <div style="">
    <p style="font-family: verdana; margin-left: 10px;"><?php echo $Description; ?> </p>
  </div>
</div>



    

</body>
</html>
<?php
include 'footer.php';
?>