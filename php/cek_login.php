<?php
//untuk mengaktifkan session pada php
session_start();

//untuk menghubungkan php dengan koneks database
include '../koneksi/koneksi.php';

//menangkap data yang diambil dari form login
$usernameDapat = $_POST['username'];
$passwordDapat = $_POST['password'];
$namaDapat = $_POST['nama'];

//menyeleksi data user dengan username, name, dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * FROM user_level WHERE username='$usernameDapat' AND nama='$namaDapat' AND password='$passwordDapat'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
        // cek jika user login sebagai admin
        if($data['level']=="admin"){
    
            // buat session login dan username
            $_SESSION['username'] = $usernameDapat;
            $_SESSION['level'] = "admin";
            // alihkan ke halaman dashboard admin
            header("location:halaman_admin.php");
    
        // cek jika user login sebagai user
        }else if($data['level']=="user"){
            // buat session login dan username
            $_SESSION['username'] = $usernameDapat;
            $_SESSION['level'] = "user";
            // alihkan ke halaman dashboard user
            header("location:halaman_user.php");
    
        }
    }else{
            // alihkan ke halaman login kembali
            header("location:/datakaryawan/index.php?pesan=gagal");
    }
?>