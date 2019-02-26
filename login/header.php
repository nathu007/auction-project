

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
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
<a href="../index.php"><img style="margin-left: 90px;"  src="../logo.png"></a>
<div class="container">
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid navbar-border">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../index.php"><i class="fa fa-home"></i> Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="../product/items.php"><i class="fa fa-building"></i> Product</a></li>
        <li><a href="../product/history.php"><i class="fa fa-building"></i> History</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-anchor"></i> All Category <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="../vehicle.php" class="text-center">Vehicle</a></li>
            <li><a href="../electronics.php" class="text-center">Electronics</a></li>
            <li><a href="../antic.php" class="text-center">Antic</a></li>
            
          </ul>
        </li>
        <li>
            <form class="navbar-form" role="search" action="../search.php" method="post">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="search" name="search" required="required">
                <div class="input-group-btn">
                    <button class="btn btn-default" name="submit" type="submit"><i class="fa fa-search"></i></button>
                </div>
            </div>
            </form>    
        </li>
        <li><a href="#"><i class="fa fa-twitter color-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-facebook color-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin color-linkedin"></i></a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
      <?php
     session_start();
          if(isset($_SESSION['name']))  {
             $name =$_SESSION['name'];
   header("LOCATION:../index.php");
  }

 else{ 
    echo '
  <li><a href="../signup/index.php"><i class="fa fa-building"></i> SIGNUP</a></li> 
            <li><a href="index.php"><i class="fa fa-user"></i> LOGIN</a></li> 
            ';


}
?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>

 <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>

