<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

//target untuk disave pada
$nipDapat = $_POST ['nip'];
$namaDapat = $_POST ['nama'];
$notlpDapat = $_POST ['notlp'];
$jabatanDapat = $_POST ['jabatan'];
$golonganDapat = $_POST ['golongan'];
$gajiDapat = $_POST ['gaji'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO pegawai (nip, nama, notlp, jabatan, golongan, gaji)
VALUES ('$nipDapat', '$namaDapat', '$notlpDapat', '$jabatanDapat', '$golonganDapat', '$gajiDapat')";

if ($conn->query($sql) === TRUE) {
    header("location:viewAllPegawai.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>