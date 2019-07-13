<?php
include '../koneksi/koneksi.php';
$id         = $_GET['id'];
$user  = mysqli_query($koneksi, "select * from user_level where id='$id'");
$row        = mysqli_fetch_array($user);

?>

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
        <p class="tulisan_user">Silahkan Update Data User Dibawah</p>
        <form action="updateUser.php" method="post">
            <label>ID</label>
            <input type="text" value="<?php echo $row['id'];?>" name="id" class="form_insert" placeholder="ID" readonly required="required">
            <label>Username</label>
            <input type="text" value="<?php echo $row['username'];?>" name="username" class="form_insert" placeholder="Username" required="required">
            <label>Password</label>
            <input type="text" value="<?php echo $row['password'];?>" name="password" class="form_insert" placeholder="Password" required="required">
            <label>Nama</label>
            <input type="text" value="<?php echo $row['nama'];?>" name="nama" class="form_insert" placeholder="Nama" required="required">
            <label>Golongan</label>
            <select name="level" class="form_insert" required>
							<option value="">Klik Pilihan Level</option>
                            <option value="admin">Admin</option>
							<option value="user">User</option>
                        </select>
            <input type="submit" class="tombol_insert" value="Insert Data">
        </form>
    </div>
</body>
</html>