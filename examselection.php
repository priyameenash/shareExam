<?php

function submitprocess()
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

$exam = $_POST['exam'];
$rate = $_POST['rate'];

$query = "UPDATE users SET exam_name='$exam', rate='$rate' where email='pravi@gmail.com' ";
$data = mysqli_query($con,$query) or die("Failed".mysqli_error());

if($data)
{
echo "your data is inserted";
}
}

//if(isset($_POST['submit']))
//{
	submitprocess();
//}

?>







