
<!--start header-->

<?php include('header.php');?>
<!--end header-->
<?php include('slider.php');
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'kumbhmitra';
$dbconfig = mysqli_connect($host,$username,$password,$database);

?>

  



<div class="container" id="mainashram" style="margin-top:10px;">
<div class="jumbotron">
   <?php 
   error_reporting(0);
     echo $lang=$_GET['ashram'];
       $setdata=mysqli_query($dbconfig, "SELECT * FROM `ahsram` WHERE id='$lang' ");
       while ($ashram=mysqli_fetch_array($setdata)) {
        
        ?>
  <div class="row">
    <div class="col-sm-5 ">
      <img src="image/<?php echo $ashram['ashram_image']; ?>" alt="Chania" style="width: 100%;height: 400px;">
    </div>

    <div class="col-sm-7">

<h2 style="color:#f00; font-weight:700;">
<?php echo  $aname=$ashram['ashram_name']; ?>
</h2>
<p style="color:#73c800 ;  font-weight:400;"><?php echo  $aname=$ashram['ashram_address']; ?>
</p>
  <p style="text-align:justify; font-size: 15px; border: 10px solid #eeeeee;"><?php echo  $aname=$ashram['ashram_description']; ?></p> 
    <button class="btn btn-success btn-block">Book Now</button>


    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d208329.26469703624!2d83.63640981295842!3d27.163823709546577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39940f7c44873943%3A0x536ee5ecbcc1b687!2sSterling+Public+School!5e0!3m2!1sen!2sin!4v1520918872251" width="100%" height="200"  frameborder="0" style="border:0" allowfullscreen></iframe>
</div></div>
<?php } ?>
</div></div>





<?php include('footer.php');?> 


<!--footer-->

