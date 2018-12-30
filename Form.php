<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "signUpDB";


$conn = new mysqli($servername, $username, $password, $db);


$firstname = $_POST['name1'];
$lastname = $_POST['name2'];
$email = $_POST['email'];
$country = $_POST['Country'];
$password=$_POST['Password'];



$hash=password_hash($password, PASSWORD_DEFAULT);


$sql = "INSERT INTO usertbl (firstname,lastname,email,country,password)
VALUES ('$firstname','$lastname','$email','$country','$hash')";



if(mysqli_query($conn,$sql))
{
	echo "  Created";
}

else
{
		echo " Not Created";

}
?>
