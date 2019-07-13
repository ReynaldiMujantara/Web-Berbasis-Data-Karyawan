<html>
<head>
    <title>Halaman User</title>
    <link rel="stylesheet" href="../css/halamanuser.css">
</head>
<body>
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
    }
    if($_SESSION['level']!="user"){
        header("location:halaman_admin.php");
    }
 
	?>
	<h1>Halaman User</h1>
 
	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
    <div class="menu">
        <a class="menuNavbar" href="viewAllPegawaiUser.php">Lihat Pegawai</a>
        <a class="menuNavbar" href="logout.php">Logout</a>
    </div>
    <div clas="content">
        <h1>Selamat Datang Di Halaman User:)</h1>
    </div>
</body>
</html>