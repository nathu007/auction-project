<?php
include 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/boxotstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js "></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js "></script>
<![endif]-->
<!-- YOU NEED THIS REFERENCE TO BE ABLE TO GET FONTAWESOME 4 ICONS TO THIS SNIPP -->
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
	<title></title>
</head>
<body>

<div class="container">

        <div class="row">

            <div class="col-md-3">
                <div class="list-group">
                    <a href="index.php" class="list-group-item">Home</a>
                    <a href="upcoming.php" class="list-group-item">Upcoming</a>
                    <a href="winner.php" class="list-group-item">Winner</a>
                </div>
            </div>

            <div class="col-md-9">

                <div class="jumbotron">
                	<h2 class="text-center">Search Result</h2>
                </div>

                <div class="row">
                	<?php
                	include 'db.php';
                    if (isset($_POST['submit'])) {
                    	$search=$_POST['search'];
                        $time=date("y-m-d h:i:s");

                    	$sql ="SELECT `id`, `start_time`, `end_time`, `image`, `description`, `category`, `item_title`, `min_bid` FROM `auction_item` WHERE `item_title` LIKE '%".$search."%' AND `end_time`>'".$time."' AND `start_time`< '".$time."'";

                    	$result = mysqli_query($con, $sql);  
                echo mysqli_error($con);
                while($row = mysqli_fetch_array($result)){

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
                    }

                	?>


                   

                    

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->
	


</body>
</html>

<?php
include 'footer.php';
?>