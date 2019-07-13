<?php
session_start();
session_unset();
session_destroy();

echo "berhasil";

header("location:../index.php");

?>