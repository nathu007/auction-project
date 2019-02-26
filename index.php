<?php
include 'header.php';

     date_default_timezone_set('Asia/Kolkata');
     include "vender/db.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mazor Auction</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <div class="list-group">
                    <a href="" class="active list-group-item">Home</a>
                    <a href="upcoming.php" class="list-group-item">Upcoming</a>
                    <a href="winner.php" class="list-group-item">Winner</a>
                </div>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="20181101_150000_halloween_super_sale_blast2.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="20181101_150000_halloween_super_sale_blast2.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="20181101_150000_halloween_super_sale_blast2.png" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">
<?php
$time=date("y-m-d h:i:s");
$query = "SELECT * FROM auction_item  WHERE `end_time`>'".$time."' AND `start_time`< '".$time."'";  
                
                $result = mysqli_query($con, $query);  
                echo mysqli_error($con);
                while($row = mysqli_fetch_array($result))  
                {  
                    $id = $row['id'];
                $query1 = "SELECT `id`, `time`, `uname`, `uemail`, MAX(`bid`), `auction_id` FROM `bid` WHERE `auction_id` = '".$id."'"; 
       $result1 = mysqli_query($con, $query1);
       $row1=mysqli_fetch_array($result1);
       $bid = $row1['MAX(`bid`)'];
               echo ' 
                 
                 <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="'.$row['image'].'" style="height: 200px; width:270px;" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$'.$bid.'</h4>
                                <h4><a href="product/index.php?auction_id='.$row['id'].'">'.$row['item_title'].'</a>
                    
                                </h4>
                                <p>'.$row['description'].'</p>
                            </div>
                            
                                                        <div class="ratings">
                                                        <p>End Time: '.$row['end_time'].'</p>
                                
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
    <!-- /.container -->


    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
<?php
include 'footer.php';
?>