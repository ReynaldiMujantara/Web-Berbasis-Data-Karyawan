<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input User</title>
    <link rel="stylesheet" href="../css/inputuser.css">
</head>
<body>
<h1>Input Data User</h1>
<div class="formuser">
        <p class="tulisan_user">Silahkan Insert Data User Dibawah</p>
        <form action="prosesInputUser.php" method="post">
            <label>Username</label>
            <input type="text" name="username" class="form_insert" placeholder="Username" required="required">
            <label>Password</label>
            <input type="text" name="password" class="form_insert" placeholder="Password" required="required">
            <label>Nama</label>
            <input type="text" name="nama" class="form_insert" placeholder="Nama" required="required">
            <label>Golongan</label>
            <select name="level" class="form_insert" required>
							<option value="">Klik Pilihan Level</option>
                            <option value="admin">Admin</option>
							<option value="user">User</option>
                        </select>
            <input type="submit" class="tombol_insert" value="Insert Data">
            <center>
                <a class="link" href ="halaman_admin.php">Kembali</a> 
            </center>
        </form>
    </div>
</body>
</html>