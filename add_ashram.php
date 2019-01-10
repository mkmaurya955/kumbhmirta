<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="style/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
#mainashram{
font-size: 12px; 

}
</style>
</head>

<body>


  
<?php include('header.php');?>
<div class="container">

<div class="jumbotron">
  <div class="row">
    <div class="col-sm-3 "></div>
<div class="col-sm-6 ">
  


  <ul class="nav nav-tabs nav-justified">
   <!-- <li ><a href="login.php">Log in</a></li>
    <li class="active"><a href="signup.php">Sign Up</a></li>
    -->
  
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      
     
     <?php
   
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'sterlingitproject';
$dbconfig = mysqli_connect($host,$username,$password,$database);
      if (isset($_POST['submitpro'])) {
       
        $ptype=$_POST['property_type'];
        $aname=$_POST['ashram_name'];
        $address=$_POST['ashram_add'];
        $acity=$_POST['ashram_city'];
        $amap=$_POST['ashram_map'];
        $ades=$_POST['ashram_des'];
       
       $upload_image=$_FILES["ashram_image"][ "name" ];

$folder="/xampp/htdocs/kumbhmitra/image/";

move_uploaded_file($_FILES["ashram_image"]["tmp_name"], "$folder".$_FILES["ashram_image"]["name"]);

$insert_path="INSERT INTO `ashram` (`property_type`, `ashram_name`, `ashram_img`, `ashram_des`, `ashram_map`, `ashram_add`, `ashram_city`) VALUES ('$ptype', '$aname', '$upload_image', '$ades', '$amap', '$address', '$acity')";
if (mysqli_query($dbconfig, $insert_path)) {
  echo "Insert sccuessfully";
  header('Location:add_ashram.php');

}
else {
  echo "not inserted data in database";
}
//$var=mysqli_query($con, $inser_path);
      }
     ?>
       <h2>Add Property</h2>
  <form action="" method="post" enctype="multipart/form-data">

 <div class="form-group">
      <label for="name">Property Type</label>
      <select class="form-control"  name="property_type">
        <option value="1">Ashram</option>
        <option value="2">Dharamshala</option>
        <option value="3">Goverment Place</option>
      </select>
    </div>
    <div class="form-group">
      <label for="name">Ashram name</label>
      <input type="text" class="form-control"  placeholder="Enter" name="ashram_name">
    </div>

  <div class="form-group">
      <label for="name">Ashram address</label>
      <input type="text" class="form-control"  placeholder="Enter" name="ashram_add">
    </div>
      <div class="form-group">
      <label for="name">Ashram city</label>
      <input type="text" class="form-control"  placeholder="Enter" name="ashram_city">
    </div>
      <div class="form-group">
      <label for="name">Ashram location map</label>
      <input type="text" class="form-control"  placeholder="Enter" name="ashram_map">
    </div>
      <div class="form-group">
      <label for="name">Ashram drescription</label>
      <input type="text" class="form-control"  placeholder="Enter" name="ashram_des">
    </div>
      <div class="form-group">
      <label for="name">Ashram photo</label>
      <input type="file" class="form-control"  placeholder="Enter" name="ashram_image">
    </div>
     
    <button type="submit" class="btn btn-default" name="submitpro">Submit</button>
  </form>
    </div>
    <div id="menu2" class="tab-pane fade">
     
    
    </div>
</div>
</div>
</div></div></div>
































<!--footer-->
<?php include('footer.php');?>
<!--footer-->




</body>
<!-- Mirrored from www.w3schools.com/html/tryit.asp?filename=tryhtml_classes_capitals by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 11:02:55 GMT -->
</html>
