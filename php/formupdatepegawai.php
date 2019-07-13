<?php
include '../koneksi/koneksi.php';
$id         = $_GET['id'];
$user  = mysqli_query($koneksi, "select * from pegawai where id='$id'");
$row        = mysqli_fetch_array($user);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Pegwai</title>
    <link rel="stylesheet" href="../css/inputpegawai.css">
</head>
<body>
<h1>Input Data Pegawai</h1>
<div class="formpegawai">
        <p class="tulisan_pegawai">Silahkan Update Data Pegawai Dibawah</p>
        <form action="updatePegawai.php" method="post">
            <label>ID</label>
            <input type="text" value="<?php echo $row['id'];?>" name="id" class="form_insert" placeholder="ID" readonly required="required">
            <label>Nip</label>
            <input type="text" value="<?php echo $row['nip'];?>" name="nip" class="form_insert" placeholder="Nip" required="required">
            <label>Nama</label>
            <input type="text" value="<?php echo $row['nama'];?>" name="nama" class="form_insert" placeholder="Nama" required="required">
            <label>No Tlp</label>
            <input type="text" value="<?php echo $row['notlp'];?>" name="notlp" class="form_insert" placeholder="No Tlp" required="required">
            <label>Golongan</label>
            <input type="text" value="<?php echo $row['golongan'];?>" name="golongan" class="form_insert" placeholder="Golongan" required="required">
            <input type="text" value="<?php echo $row['gaji'];?>" name="gaji" class="form_insert" readonly placeholder="Gaji" required="required">
            <input type="submit" class="tombol_insert" value="Insert Data">
        </form>
    </div>
</body>
</html>