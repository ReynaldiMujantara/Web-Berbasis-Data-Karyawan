<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Silahkan Login Terlebih Dahulu</h1>

    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan']=="gagal"){
            echo "<div class='alert'>Mohon Cek Kembali Seluruh Username, Nama Dan Password Anda!</div>";
        }
    }
    ?>

    <div class="formLogin">
        <p class="tulisan_login">Silahkan Login Dibawah</p>
        <form action="php/cek_login.php" method="post">
            <label>Username</label>
            <input type="text" name="username" class="form_login" placeholder="Username" required="required">
            <label>Password</label>
            <input type="password" name="password" class="form_login" placeholder="Password" required="required">
            <label>Nama</label>
            <input type="text" name="nama" class="form_login" placeholder="Nama" required="required">
            <label>Level</label>
            <select name="level" class="form_login" required>
							<option value="">Pilih Level User</option>
							<option value="1">Admin</option>
							<option value="2">User</option>
						</select>
            <input type="submit" class="tombol_login" value="Login">
            <center>
                <a class="link" href ="index.php">Kembali</a> 
            </center>
        </form>
    </div>
</body>
</html>