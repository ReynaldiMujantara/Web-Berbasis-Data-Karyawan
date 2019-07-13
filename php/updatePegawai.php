<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

$nipDapat = $_POST['nip'];
$namaDapat = $_POST['nama'];
$notlpDapat = $_POST['notlp'];
$jabatanDapat = $_POST['jabatan'];
$golonganDapat = $_POST['golongan'];
$gajiDapat = $_POST['gaji'];
$idDapat = $_POST['id'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE pegawai SET nip='$nipDapat', nama='$namaDapat', notlp='$notlpDapat', jabatan='$jabatanDapat', golongan='$golonganDapat', gaji='$gajiDapat' WHERE id='$idDapat'";

if ($conn->query($sql) === TRUE) {
    header('location:viewAllPegawai.php');
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>