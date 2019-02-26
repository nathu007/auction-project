<?php
include '../db.php';
if(isset($_GET['delete_item']))
{
  $id=$_GET['delete_item'];
}


$query = "DELETE FROM `auction_item` WHERE `id` = '".$id."'";  
                
                $result = mysqli_query($con, $query);  
                echo mysqli_error($con);

                header("LOCATION:items.php");

?>