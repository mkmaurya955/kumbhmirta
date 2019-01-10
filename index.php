<?php include('header.php'); ?>
<?php  include('slider.php');
          
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'kumbhmitra';
$dbconfig = mysqli_connect($host,$username,$password,$database);

 ?>
 <!-- Wrapper for slides -->
  <!--id=kumbh class=sub_kumbh -->
<style type="text/css">
  #kumbh .sub_kumbh p{

    font-size: 16px;

    color: #000;
   
    text-align: right;

}
 
  
</style>
  
<div class="container" id="kumbh" >

	<div class="jumbotron sub_kumbh" >
  <img src="image/slider4.jpg" style=" width:500px; height:300px; float: left; border:10px solid #eeeeee  " class="responsive">
  <div style=" border: 10px;"  >
  <h2 style="color: #f00; font-weight: 700;" ><?php echo $title; ?></h2>
  <p style="text-align: justify; border: 10px;"><?php echo $text; ?></p>
</div></div></div>

<style type="text/css">
	#mainashram .sub_ashram h3{

		font-size: 18px;

		color: #ff0011;


	}
</style>
  
<div class="container" id="mainashram">
  <ul class="nav nav-tabs nav-justified">
    <li class="active" style="background-color:Tomato;">
      <a data-toggle="tab" href="#home" style="color:black; font-weight:700;  font-size: 20px; ">Ashram</a></li>
    <li style="background-color:orange">
      <a data-toggle="tab" href="#menu1" style="color:black; font-weight:700;  font-size: 20px;">Dharmshala</a></li>
    <li style="background-color:orange">
      <a data-toggle="tab" href="#menu2" style="color:black; font-weight:700;  font-size: 20px;">Government</a></li>
  </ul>

  
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Ashram</h3>   
       <div class="row">
      <?php 
       $setdata=mysqli_query($dbconfig, "SELECT * FROM `ahsram` WHERE property_type =1 ");
       while ($ashram=mysqli_fetch_array($setdata)) {
        
        ?>
        <div class="col-sm-3 sub_ashram" >
          <div  style="color:#;  box-shadow: 0px 0px 3px 5px #f1f1f1; padding: 10px;">
                <img src="image/<?php echo $ashram['ashram_image']; ?>" style="height: 200px;"  class="img-responsive">
                <h3><?php echo $ashram['ashram_name']; ?></h3>
                <p><?php echo $ashram['ashram_address']; ?></p>

            <div class="row">
              <div class="col-sm-6"></div>
                <div class="col-sm-6">
                  <p><a href="ashram.php?ashram=<?php echo $ashram['id']; ?>"  class="btn btn-success pull-right">Book Now</a></p>
                </div>
              </div>
            </div>
          </div>
<?php } ?>

      </div>


    </div>

    <!--2 start-->
     <div id="menu1" class="tab-pane fade ">
      <h3>Dharmshala</h3>   
       <div class="row">
      <?php 
       $setdata=mysqli_query($dbconfig, "SELECT * FROM `ahsram` WHERE property_type=2 ");
       while ($ashram=mysqli_fetch_array($setdata)) {
         $aname=$row['ashram_name'];
        ?>
        <div class="col-sm-3 sub_ashram" >
          <div  style="color:#;  box-shadow: 0px 0px 3px 5px #f1f1f1; padding: 10px;">
                <img src="image/<?php echo $ashram['ashram_image']; ?>" style="height: 200px;"  class="img-responsive">
                <h3><?php echo $ashram['ashram_name']; ?></h3>
                <p><?php echo $ashram['ashram_address']; ?></p>
                
            <div class="row">
              <div class="col-sm-6"></div>
                <div class="col-sm-6">
                  <p><a href="ashram.php?ashram=<?php echo $ashram['id']; ?>"  class="btn btn-success pull-right">Book Now</a></p>
                </div>
              </div>
            </div>
          </div>
<?php } ?>

      </div>


    </div>
    
    <!-- 3 start-->
     <div id="menu2" class="tab-pane fade ">
      <h3>Government</h3>   
       <div class="row">
      <?php 
       $setdata=mysqli_query($dbconfig, "SELECT * FROM `ahsram` WHERE property_type=3 ");
       while ($ashram=mysqli_fetch_array($setdata)) {
         $aname=$row['ashram_name'];
        ?>
        <div class="col-sm-3 sub_ashram" >
          <div  style="color:#;  box-shadow: 0px 0px 3px 5px #f1f1f1; padding: 10px;">
                <img src="image/<?php echo $ashram['ashram_image']; ?>" style="height: 200px;"  class="img-responsive">
                <h3><?php echo $ashram['ashram_name']; ?></h3>
                <p><?php echo $ashram['ashram_address']; ?></p>
                
            <div class="row">
              <div class="col-sm-6"></div>
                <div class="col-sm-6">
                  <p><a href="ashram.php?ashram=<?php echo $ashram['id']; ?>"  class="btn btn-success pull-right">Book Now</a></p>
                </div>
              </div>
            </div>
          </div>
<?php } ?>

      </div>


    </div>
  </div>
</div>




<?php include('footer.php');?>  

