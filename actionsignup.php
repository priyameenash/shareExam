<?php


function Newuser()
{

define('DB_HOST','localhost');
define('DB_NAME','onlinepartner');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to Mysql".mysqli_error());
$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to Mysql".mysqli_error($con));

if(mysqli_connect_errno($con))
{
echo "failed to connect to mysql".mysqli_connect_error();
}
else{
echo "successfully connected to your database";
}

$Name = $_POST['name'];
$Email = $_POST['email'];
$contact_number = $_POST['contact_number'];
$user_password = $_POST['user_password'];

$query = "INSERT INTO users(Name,Email,contact_number,user_password) VALUES ('$Name','$Email','$contact_number','$user_password')";
$data = mysqli_query($con,$query) or die("Failed".mysqli_error());

if($data)
{
echo "your registration is completed";
}
}

if(isset($_POST['submit']))
{
	Newuser();
}

?>







