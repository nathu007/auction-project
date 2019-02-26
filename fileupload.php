<?php
     date_default_timezone_set('Asia/Kolkata');
     include "db.php";
                 
                 
                 if(isset($_POST['submit'])){



             
//upload file
               $target_dir = "uploadimg/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);



if ($_FILES["fileToUpload"]["size"] != 0)
{
// Check if image file is a actual image or fake image

   $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        
        $uploadOk = 1;
    } else {
        
    echo "File is not an image";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) {

  echo "please rename file and try again to upload.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 3000000) {
  
  echo "Sorry, your file is too large..";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "JPEG" ) {
    
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
 
  
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $pri= "The file ".basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    echo $pri;
  //this is when pic is provided and data has to be uploaded
  
  include "db.php";
  $target_file=explode("/",$target_file,2);
  
  $sql="INSERT INTO `image` (`image`) VALUES ('".$target_file[1]."')";
	}

}
				 }
				 }
  ?>
  
  
<html>
<body>
<form id="sell-form" method="post" action="" enctype="multipart/form-data"  role="form" style="display: block;"> <br>

<input type="file" name="fileToUpload" id="fileToUpload" required/>
<input type="submit" name="submit" id="submit" tabindex="4" class="form-control btn btn-login" value="submit">
</form>
</body>
</html>

