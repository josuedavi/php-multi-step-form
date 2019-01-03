<?php
require_once('dbconfig.php');
//variables for form input



$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$num = $_POST['phone_number'];
$address = $_POST['address'];
$state = $_POST['state'];
$city = $_POST['city'];
$zipcode = $_POST['zipcode'];
$email = $_POST['email'];
$password = $_POST['password'];


$sql = "INSERT INTO users (Firstname,Lastname,Address,State,City,Zipcode,Number,Email,Password) VALUES ('$fname','$lname','$address','$state','$city','$zipcode','$num','$email','$password')";

$result = mysqli_query($conn, $sql);

if($result)
{

echo "Location: it worked";
}
else
{
	echo "Error :".$sql;
}



?>
