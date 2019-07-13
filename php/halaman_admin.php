<!DOCTYPE html>
<html>
<head>
    <title>Halaman admin</title>
    <link rel="stylesheet" href="../css/halamanadmin.css">
</head>
<body>
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
        header("location:../index.php?pesan=gagal");
        
        

    }
    if($_SESSION['level']!="admin"){
        header("location:halaman_user.php");
    }
 
	?>
	<h1 class="tulisan_admin">Halaman Admin</h1>
 
	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
    <div class="menu">
        <a id="inputUser" class="menuNavbar" href="inputuser.php">Input User</a>
        <a class="menuNavbar" href="viewAllUser.php">Lihat User</a>
        <a class="menuNavbar" href="inputgolongan.php">Input Golongan</a>
        <a class="menuNavbar" href="viewAllGolongan.php">Lihat Golongan</a>
        <a class="menuNavbar" href="inputpegawai.php">Input Pegawai</a>
        <a class="menuNavbar" href="viewAllPegawai.php">Lihat Pegawai</a>
        <a class="menuNavbar" href="logout.php">Logout</a>
    </div>
    <div clas="content">
        <h1>Selamat Datang Di Halaman Admin:)</h1>
    </div>
 
</body>
</html>