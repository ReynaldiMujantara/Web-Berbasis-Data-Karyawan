<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

//target untuk disave pada
$golonganDapat = $_POST ['golongan'];
$gajiDapat = $_POST ['gaji'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO golongan (golongan, gaji)
VALUES ('$golonganDapat', '$gajiDapat')";

if ($conn->query($sql) === TRUE) {
    header("location:viewAllGolongan.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>