<?php
include("config.php");

$db="signUpDB";

$conn = new mysqli($servername, $username, $password,$db);

$stbl="CREATE TABLE userTbl (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
country VARCHAR(30),
password VARCHAR(30)
)";


if(mysqli_query($conn,$stbl))
{
	echo "Table  Created";
}

else
{
		echo " Table Not Created";

}
?>