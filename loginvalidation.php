<?php
define('DB_HOST','localhost');
define('DB_NAME','onlinepartner');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to Mysql".mysqli_error());
$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to Mysql".mysqli_error($con));

if(isset($_POST['submit']))
{
$email=$_POST['e_mail'];
$password=$_POST['pass'];
$query=mysqli_query($con,"SELECT * from users where Email='$email' && user_password='$password'");
$row=mysqli_num_rows($query);
if($row>0)
{
echo "successfully logged in";
}
else
{
 echo "check password and email";
}
}