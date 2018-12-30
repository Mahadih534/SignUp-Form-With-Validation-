
<?php
$servername = "localhost";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password);

if (mysqli_connect_error()) {
    echo"Error";
}

else{
    echo"Connection Established Successfully";  
}



$sql = "CREATE DATABASE signUpDB";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}




?>