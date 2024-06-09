<?php
include 'koneksi.php';

$del = $_GET['del'];

// delete terhubung ke table database
mysqli_query($koneksi, "DELETE FROM dataMatKul WHERE noMatKul =$del");

// kembali ke php sebelumnya
header("location:dataMatKul.php");
