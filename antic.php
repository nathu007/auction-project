<?php
include 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Antic</title>
</head>
<body>

<div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Antic</p>
                <div class="list-group">
                    <a href="index.php" class="list-group-item">Home</a>
                    <a href="upcoming.php" class="list-group-item">Upcoming</a>
                    <a href="winner.php" class="list-group-item">Winners</a>
                </div>
            </div>

            <div class="col-md-9">

            

                <div class="row">

<?php
include 'db.php';
$cat="antic";
$time=date("y-m-d h:i:s");
$sql="SELECT `id`, `start_time`, `end_time`, `image`, `description`, `category`, `item_title`, `min_bid` FROM `auction_item` WHERE `category` = '".$cat."' AND `end_time`>'".$time."' AND `start_time`< '".$time."' ";
   
   $result = mysqli_query($con, $sql);  
                echo mysqli_error($con);
                while($row = mysqli_fetch_array($result))  
                {  
                     $id = $row['id'];
                $query1 = "SELECT `id`, `time`, `uname`, `uemail`, MAX(`bid`), `auction_id` FROM `bid` WHERE `auction_id` = '".$id."'"; 
       $result1 = mysqli_query($con, $query1);
       $row1=mysqli_fetch_array($result1);
       $bid = $row1['MAX(`bid`)'];
                    $image="../".$row['image'];
    
   


echo '
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="'.$row['image'].'" alt="" style="height: 250px; width: 260px;">
                            <div class="caption">
                                <h4 class="pull-right"$>$'.$bid.'</h4>
                                <h4><a href="product/index.php?auction_id='.$row['id'].'">'.$row['item_title'].'</a>
                                </h4>
                                <p>'.$row['description'].'</p>
                            </div>
                            <div class="ratings">
                                <p class="text-center">End Time : '.$row['end_time'].'</p>
                                
                            </div>
                        </div>
                    </div>

        ';             

                    }
                    ?>
                </div>

            </div>

        </div>

    </div>

</body>
</html>

<?php
include 'footer.php';
?>
