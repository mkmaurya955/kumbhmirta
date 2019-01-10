
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$lang =$_GET['lang'];
$langarray = array('en', 'hn', 'sp');
$found = false;
if (in_array($lang, $langarray)) 
	$found =true;

if(!$found)
	$lang ='en';
$xml=simplexml_load_file("lang.xml") or die("xml file not found");
$title=$xml->title->$lang;
$text= $xml->text->$lang;
?>
<h1><?php echo $title; ?></h1>
<div><?php echo $text; ?></div>



<div class="container">
                                          
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Languages:
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="?lang=en">English</a></li>
      <li><a href="?lang=hn">Hindi</a></li>
      <li><a href="?lang=sp">Spanish</a></li>
    </ul>
  </div>
</div>