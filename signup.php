
  
<?php include('header.php');?>


<div class="container">
<div class="jumbotron">
  <div class="row">
    <div class="col-sm-3 "></div>
<div class="col-sm-6 ">
  


  <ul class="nav nav-tabs nav-justified">
    <li ><a href="login.php">Log in</a></li>
    <li class="active"><a href="signup.php">Sign Up</a></li>
    
  
  </ul>

   

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      
<?php

@$servername = "localhost";
@$username = "root";
@$password = "";
@$dbname = "kumbhmitra";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("database not connected");
if (isset($_POST['senddata'])) {
  # code...

 
  $name=$_POST['name'];
  $mobile_no=$_POST['mobile_no'];
  $email=$_POST['email'];
  $pwd=$_POST['password'];
  $pwd=$_POST['conform_password'];


$sql = "INSERT INTO `signup`(`name`, `mobile_no`, `email`, `password`, `confirm_password`) VALUES ('$name',$mobile_no,' $email','$pwd','$pwd')";

$insertdata=mysqli_query($conn,$sql);
if ($insertdata) {
   echo "data inserted successfully";

}
else{
  echo "data not inserted";
}

}
?>

     
     
       <h2>Sign Up </h2>
 <form action="" method="POST" enctype="multipart/form-data">

    <div class="form-group">
      <label for="name">Name</label>
      <input type="name" class="form-control" id="name" placeholder="Enter" name="name" required>
    </div>



    <div class="form-group">
      <label for="mobile_no">Mobile No</label>
      <input type="int" class="form-control" id="mobile_no" placeholder="Enter" name="mobile_no"  required>
    </div>

<div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Enter" name="email" required>
    </div>

    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter" name="pwd" required>
    </div>
    <div class="form-group">
      <label for="pwd">Conform Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter" name="pwd" required>
    </div>

    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default" name="senddata">Submit</button>
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
