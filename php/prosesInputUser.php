<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

//target untuk disave pada
$usernameDapat = $_POST ['username'];
$passwordDapat = $_POST ['password'];
$namaDapat = $_POST ['nama'];
$levelDapat = $_POST['level'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO user_level (username, password, nama, level)
VALUES ('$usernameDapat', '$passwordDapat', '$namaDapat', '$levelDapat')";

if ($conn->query($sql) === TRUE) {
    header("location:viewAllUser.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>