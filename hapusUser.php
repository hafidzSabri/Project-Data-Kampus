<?php
include 'koneksi.php';

$del = $_GET['del'];

// delete terhubung ke table database
mysqli_query($koneksi, "DELETE FROM datalogin WHERE noUser =$del");

// kembali ke php sebelumnya
header("location:dataUser.php");