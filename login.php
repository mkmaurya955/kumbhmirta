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
    <li class="active"><a href="login.php">Log in</a></li>
    <li><a href="signup.php">Sign Up</a></li>
    
  
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      
     
  
     
       <h2>Log in </h2>
  <form action="/action_page.php">

  


    <div class="form-group">
      <label for="mobile_no">Mobile No</label>
      <input type="mobile_no" class="form-control" id="mobile_no" placeholder="Enter Mobile No" name="mobile_no">
    </div>



    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
   

    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default"><a href="narayanashram.php">Submit</a></button>
  </form>
    </div>
    
    <div id="menu2" class="tab-pane fade">
     
    </div>
</div>
</div>
</div>
</div></div>

































<!--footer-->
<?php include('footer.php');?>
<!--footer-->




</body>
<!-- Mirrored from www.w3schools.com/html/tryit.asp?filename=tryhtml_classes_capitals by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 11:02:55 GMT -->
</html>
