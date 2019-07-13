<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

$id = $_POST['id'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT golongan,gaji FROM golongan WHERE id=$id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
		$golongan = $row ['golongan'];
		$gaji = $row ['gaji'];
		
    }
	//hasil akhir harus diubah ke json
	$hasilAkhir = array("golongan" => $golongan, "gaji" => $gaji, );

    //echo $kelas. ' '. $nama;
   echo json_encode($hasilAkhir);

	
} else {
    echo "0";
}
$conn->close();
//echo $dataHeadTable;
//echo $linkKeHome;
?>