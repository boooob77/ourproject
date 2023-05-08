<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feild finder";

$con=mysqli_connect($servername,$username,$password,$dbname);



if (!$con)
{
	die("connectionfailed:" .mysqli_connect_error());
}
else{
	echo "connected";
}







?>