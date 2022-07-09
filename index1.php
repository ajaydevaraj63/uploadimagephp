<?php
error_reporting(0);

$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {
//file 1
	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./image/" . $filename;

	$db = mysqli_connect("localhost", "root", "", "imageuploaddb");

	// Get all the submitted data from the form
	$sql = "INSERT INTO image (filename) VALUES ('$filename')";

	// Execute query
	mysqli_query($db, $sql);

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3> Image uploaded successfully!</h3>";
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body  style="background-color:black ;">

<div id="content" style="margin: 100px 100px; width:50wh;">
<div style="margin: 5px;">
      <h1 style="color:#fff ;">image upload</h1>
</div>
       <form method="POST" action="" enctype="multipart/form-data" class="w-50 ">
            <div class="form-group" style="margin: 5px;" >
                <input type="text" class="form-control p-2 my-2 " placeholder="title1" id="name1" name = "name1"  >
                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="decsription1"  name="dec1" rows="3"></textarea>
               
                <div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle p-2 my-2 " data-bs-toggle="dropdown" aria-expanded="false">
 select images
  </button>
  <ul class="dropdown-menu">
    <li style="width:80rem ;"><input type="file" class="form-control p-2 my-2 w" name="uploadfile"  ></li>
    <li  style="width:80rem ;"> <input type="file" class="form-control p-2 my-2 w" name="files2"  ></li>
    <li  style="width:80rem ;"> <input type="file" class="form-control p-2 my-2 w" name="files3"  ></li>
    <li  style="width:80rem ;"><input type="file" class="form-control p-2 my-2 w" name="files4"  > </li>
    <li  style="width:80rem ;">   <input type="file" class="form-control p-2 my-2 w" name="files5"  > </li>
    <li  style="width:80rem ;"> <input type="file" class="form-control p-2 my-2 w" name="files6"  > </li>
  </ul>
                </div>
               
               
               
               
                
                
                
                
             
               
                <input type="text" class="form-control p-2 my-2 w" placeholder="title2" name = "name2"  >
                <textarea class="form-control p-2 my-2" id="exampleFormControlTextarea1"placeholder="decsription2" rows="3" name="dec2"></textarea>
                <textarea class="form-control p-2 my-2" id="exampleFormControlTextarea1"placeholder="decsription3" rows="3" name="dec3"></textarea>
                <textarea class="form-control p-2 my-2" id="exampleFormControlTextarea1" placeholder="decsription4" rows="3" name="dec4"></textarea>
              
            <div class="form-group">
            <input type="submit" class="btn btn-success" name="upload" >
  
        </div>
        </form>
    </div>   

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>


<html>
   <body>