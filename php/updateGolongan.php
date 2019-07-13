<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

$golonganDapat = $_POST['golongan'];
$gajiDapat = $_POST['gaji'];
$idDapat = $_POST['id'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE golongan SET golongan='$golonganDapat',gaji='$gajiDapat' WHERE id='$idDapat'";

if ($conn->query($sql) === TRUE) {
    header('location:viewAllGolongan.php');
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>