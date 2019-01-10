
<!DOCTYPE html>
<html>
<head>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{
 font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";

font-weight: 400;
line-height: 1.5;
}
#mainashram{
font-size: 12px; 

}
</style>
</head>

<body>
<?php
error_reporting(0);






$lang =$_GET['lang'];
$langarray = array('en', 'hn', 'sp', 'fr' , 'ge', 'it', 'po');
$found = false;
if (in_array($lang, $langarray)) 
  $found =true;

if(!$found)
  $lang ='en';
$xml=simplexml_load_file("lang.xml") or die("xml file not found");
$title=$xml->title->$lang;
$text= $xml->text->$lang;
?>
<!--start header-->
<style type="text/css">
  
</style>
<div class="container-fluid " style="background-color: #fff; padding:px;">
  
  <div class="row">
    <div class="col-xs-3" style="background-color:#fff;"><img src="image/kumbh.jpg" style="width: 60px;"></div>
         <div class="col-xs-6" style="background-color:#fff;"><p style=" color:#f00; font-size:40px; text-align:center;">सर्वसिद्धिप्रद: कुंभ:</p></div>
      
      <div class="col-xs-3" style="background-color:#fff; "><img src="image/kumbh.jpg" style="width: 60px; float: right;"></div>

  </div>
</div>

<style type="text/css">
  #sublang .sublang2{
    border:2px solid #fff;
text-align: center;
    font-weight: 700;
    background-color: #f1f1f1;
    padding: 0.01em 16px;
    color: #000;
   font-size: 17px;
    letter-spacing: 1px;
    font-family: "Segoe UI",Arial,sans-serif;
   
  }
   #sublang .sublang2 a{
    text-align: center;
    font-weight: 700;
    background-color: #f1f1f1;
    padding: 0.01em 16px;
    color: #f00;
   font-size: 17px;
     letter-spacing: 1px;
    font-family: "Segoe UI",Arial,sans-serif;
  }
</style>

<div class="container-fluid  language">
<div class="row">

<div class=" col-xs-12 col-sm-6"><div class="row" id="sublang">
  <div class="col-xs-3  sublang2">Languages:</div>
  <div class="col-xs-3  sublang2"><a href="?lang=en">English</a></div>
  <div class="col-xs-3  sublang2"><a href="?lang=hn">Hindi</a></div>
  <div class="col-xs-3  sublang2"><a href="?lang=sp">Spanish</a></div>
</div></div>

<div class="col-xs-12 col-sm-6"> <div class="row" id="sublang"> 
  <div class="col-xs-3 sublang2"><a href="?lang=fr">French</a></div>
  <div class="col-xs-3 sublang2"><a href="?lang=ge">German</a></div>  
  <div class="col-xs-3 sublang2"><a href="?lang=it">Italian</a></div>
  <div class="col-xs-3 sublang2"><a href="?lang=po">Portugese</a></div> 
</div></div>

</div>
</div>





<!--end header-->
<style type="text/css">
#navbar-default ul li a {
  font-weight: 700;
color:#fff;

}
#navbar-default ul li a:hover {
color:#000;
}
</style>

<nav class="navbar  navbar-default" id="navbar-default" style=" background-color:#f00;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand text-white" href="#" style="color: #fff;">Kumbh Mitra</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav" style="background-color: #f00;">
        <li class=""><a href="index.php">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Kumbh Mela <span class="caret"></span></a>
          <ul class="dropdown-menu" style="background-color: #f00;">
           <li><a href="#">Introduction</a></li>
           <li><a href="#">History</a></li>
           <li><a href="#">Places</a></li>
           <li><a href="#">Important Dates</a></li>
           <li><a href="#">German</a></li>
           <li><a href="#">Italian</a></li>
           <li><a href="#">Portugese</a></li>
          </ul>
        </li>
        <li><a href="aboutus.php">Kumbh Mitra </a></li>
        <li><a href="contactus.php">Contact us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>