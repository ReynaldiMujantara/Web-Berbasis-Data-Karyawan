<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

$namaDapat = $_POST['nama'];
$usernameDapat = $_POST['username'];
$passwordDapat = $_POST['password'];
$levelDapat = $_POST['level'];
$idDapat = $_POST['id'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE user_level SET nama='$namaDapat', username='$usernameDapat',password='$passwordDapat',level='$levelDapat' WHERE id='$idDapat'";

if ($conn->query($sql) === TRUE) {
    header('location:viewAllUser.php');
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>