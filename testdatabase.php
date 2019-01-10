

  



<?php
error_reporting(0);
@$servername = "localhost";
@$username = "root";
@$password = "";
@$dbname = "kumbhmitra";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("database not connected");
if (isset($_POST['senddata'])) {
	# code...

	$ashram_property=$_POST['property_type'];
	$ashram_name=$_POST['ashram_name'];
	$ashram_address=$_POST['ashram_address'];
	$ashram_city=$_POST['ashram_city'];
	$ashram_location=$_POST['ashram_location'];
	$ashram_decription=$_POST['ashram_description'];
	

  $upload_image=$_FILES["ashram_image"][ "name" ];

$folder="image/";

move_uploaded_file($_FILES["ashram_image"]["tmp_name"], "$folder".$_FILES["ashram_image"]["name"]);




$sql = "INSERT INTO `ahsram` ( `property_type`, `ashram_name`, `ashram_address`, `ashram_city`, `ashram_location`, `ashram_description`, `ashram_image`) VALUES ( '$ashram_property', '$ashram_name', '$ashram_address', '$ashram_city', '$ashram_location', '$ashram_decription', '$upload_image')";

$insertdata=mysqli_query($conn,$sql);
if ($insertdata) {
	 echo "data inserted successfully";

}
else{
	echo "data not inserted";
}

}
?>

  <h2>Add Ashram </h2>
  <form action="" method="POST" enctype="multipart/form-data">

    <div class="form-group">
      <label for="name">Property Type</label>
      <select class="form-control"  name="property_type">
        <option value="1">Ashram</option>
        <option value="2">Dharamshala</option>
        <option value="3">Goverment Place</option>
      </select>

<br>

    <div class="form-group">
      <label for="name">Ashram name</label>
      <input type="text" class="form-control"  placeholder="Enter" name="ashram_name">
    </div>

<br>

    <div class="form-group">
      <label for="name">Ashram address</label>
      <input type="text" class="form-control"  placeholder="Enter" name="ashram_address">
    </div>

<br>
<div class="form-group">
      <label for="name">Ashram City</label>
      <input type="text" class="form-control"  placeholder="Enter" name="ashram_city">
    </div>

<br>
    <div class="form-group">
      <label for="name">Ashram location</label>
      <input type="text" class="form-control"  placeholder="Enter" name="ashram_location">
    </div>


<br>

<div class="form-group">
      <label for="name">Ashram discription</label>
      <input type="text" class="form-control"  placeholder="Enter" name="ashram_description">
    </div>

<br>

    <div class="form-group" method="POST" > 
      <label for="name">Ashram image</label>
      <input type="file" class="form-control"  placeholder="Enter" name="ashram_image">
    </div>




     <button type="submit" class="btn btn-default" name="senddata">Submit</button>
  </form>
    </div>
   
     








