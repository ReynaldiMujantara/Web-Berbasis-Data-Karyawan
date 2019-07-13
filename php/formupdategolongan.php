<?php
include '../koneksi/koneksi.php';
$id         = $_GET['id'];
$user  = mysqli_query($koneksi, "select * from golongan where id='$id'");
$row        = mysqli_fetch_array($user);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Golongan</title>
    <link rel="stylesheet" href="../css/inputgolongan.css">
</head>
<body>
<h1>Input Data Golongan</h1>
<div class="formgolongan">
        <p class="tulisan_golongan">Silahkan Update Data Golongan Dibawah</p>
        <form action="updateGolongan.php" method="post">
            <label>ID</label>
            <input type="text" value="<?php echo $row['id'];?>" name="id" class="form_insert" placeholder="ID" readonly required="required">
            <label>Golongan</label>
            <input type="text" value="<?php echo $row['golongan'];?>" name="golongan" class="form_insert" placeholder="Golongan" required="required">
            <label>Gaji</label>
            <input type="text" value="<?php echo $row['gaji'];?>" name="gaji" class="form_insert" placeholder="Gaji" required="required">
            <input type="submit" class="tombol_insert" value="Insert Data">
        </form>
    </div>
</body>
</html>