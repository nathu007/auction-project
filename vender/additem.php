<?php
include 'header.php'; 
if(isset($_GET['alert']))
{
  echo '
                 <script>alert("Your Product is Added for Auction Successfully");</script>
                 ';
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Add item - Univarsal Auction</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
  <div class="container-fluid">
  	<div class="jumbotron"> 
  		<h1 class="text-center">Add item</h1>
  	</div>
 </div>
 
 <div class="container">



<!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
<div class="row">
  <div class="col-xs-4 col-md-3"></div>
  <div class="col-xs-10 col-md-6 bg-primary">
  	
    <form id="sell-form" method="post" action="background.php" enctype="multipart/form-data"  role="form" style="display: block;"> <br>
    								<div class="form-group">
										<input type="text" name="auction_title" tabindex="1" class="form-control" placeholder="Auction title" value="" required>
									</div>
								    <div class="form-group"> 
									    <select name="auction_category" class="form-control" >
                                         <option value="vehicle">Vehicle</option>
                                         <option value="electronics">Electronics</option>
                                         <option value="antic">antic</option>
                                       </select> 

								    </div>
                                                                
                                                                <div class="form-group">
										<textarea type="text" name="auction_description" tabindex="1" class="form-control" placeholder="Description" value="" required></textarea>
									</div>
                                                              
                                                                  <div class="form-group">
										<input type="number" step="any" name="starting_price" id="startingprice" tabindex="1" class="form-control"  placeholder="Minimum Price $" value="" required>
									</div>
									
									               <div class="form-group">
                                         <label class="control-label">Auction start</label>
                                         <div class='input-group date' id='datetimepicker1'>
                     					<input type='text' class="form-control" name="auction_start" />
                     					<span class="input-group-addon">
                     					<span class="glyphicon glyphicon-calendar"></span>
                     					</span>
                  						</div>
               							</div>
 

									               <div class="form-group">
                  						<label class="control-label">Auction End</label>
                  						<div class='input-group date' id='datetimepicker12'>
                     					<input type='text' class="form-control" name="auction_end" placeholder="copy from Starting time then change" />
                     					<span class="input-group-addon">
                     					<span class="glyphicon glyphicon-calendar"></span>
                     					</span>
                  						</div>
               							</div>
 
			
								        <div class="form-group">
                                             <label for="foo">Uplod image</label>
                                             <input type="file" name="fileToUpload" id="fileToUpload" required/>
                                        </div>
										
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="submit" id="submit" tabindex="4" class="form-control btn btn-login" value="submit">
											</div>
										</div>
									</div>
                                                                     
								</form>

  </div>
  <div class="col-xs-4 col-md-2"></div>
</div>

<!-- Columns are always 50% wide, on mobile and desktop -->

 </div>
 <script>
  $(function () {
    $('#datetimepicker1').datetimepicker();
 });
  $(function () {
    $('#datetimepicker2').datetimepicker();
 });
</script>
<script>  
 $(document).ready(function(){  
      $('#submit').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  
</body>
</html>



<?php 
    
include 'footer.php'; 
?>

