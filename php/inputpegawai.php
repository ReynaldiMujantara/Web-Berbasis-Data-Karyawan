<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Pegawai</title>
    <link rel="stylesheet" href="../css/inputpegawai.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../js/jquery-3.3.1.min.js"></script>
	<script src="../js/insertDataPegawai.js"></script>
</head>
<body>
<div id="container">
<h1>Input Data Pegawai</h1>
<div class="formpegawai">
        <p class="tulisan_pegawai">Silahkan Insert Data Dibawah</p>
        <form action="prosesInputPegawai.php" method="post">
            <label>NIP</label>
            <input type="text" name="nip" class="form_insert" placeholder="Nip" required="required">
            <label>NAMA</label>
            <input type="text" name="nama" class="form_insert" placeholder="Nama" required="required">
            <label>NO TLP</label>
            <input type="text" name="notlp" class="form_insert" placeholder="No Tlp" required="required">
            <label>JABATAN</label>
            <input type="text" name="jabatan" class="form_insert" placeholder="Jabatan" required="required">
            <label>GOLONGAN</label>
            <input type="text" id="golongan" name="golongan" id="golongan" class="form_insert" placeholder="Golongan" required="required">
            <label>GAJI</label>
            <input type="text" id="gaji" name="gaji" class="form_insert" placeholder="Gaji" required="required">
                <input type="submit" id="submit" class="tombol_insert" value="Insert Data">
            <center>
                <a class="link" href ="halaman_admin.php">Kembali</a> 
            </center>
        </form>
    </div>
</div>    
</body>
</html>