<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Golongan</title>
    <link rel="stylesheet" href="../css/inputgolongan.css">
</head>
<body>
<h1>Input Data Golongan</h1>
<div class="formgolongan">
        <p class="tulisan_golongan">Silahkan Insert Data Golongan Dibawah</p>
        <form action="prosesInputGolongan.php" method="post">
        <label>Golongan</label>
        <input type="text" name="golongan" class="form_insert" placeholder="Golongan" required="required">
        <label>GAJI</label>
        <input type="text" name="gaji" class="form_insert" placeholder="Gaji" required="required">
            <input type="submit" class="tombol_insert" value="Insert Data">
            <center>
                <a class="link" href ="halaman_admin.php">Kembali</a> 
            </center>
        </form>
    </div>
</body>
</html>