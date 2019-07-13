<?php 
$koneksi = mysqli_connect("localhost","root","","user");

//untuk mengcek koneksi
if(mysqli_connect_errno()){
    echo "Koneksi Kedatabase gagal :" . mysqli_connect_errno();
}
?>