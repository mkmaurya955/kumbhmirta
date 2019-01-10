
<?php
error_reporting(0);
@$servername = "localhost";
@$username = "root";
@$password = "";
@$dbname = "kumbhmitra";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("database not connected");




$sql = "INSERT INTO `signup`(`name`, `mobile_no`, `email`, `password`, `confirm_password`) VALUES ('saurabh',7860718186,'tgtsaurabhmaurya45@gmail.com','shubham','shubham')";
$insertdata=mysqli_query($conn,$sql);
if ($insertdata) {
	 echo "data inserted successfully";

}
else{
	echo "data not inserted";
}

