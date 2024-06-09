<?php
include 'koneksi.php';

$del = $_GET['del'];

// delete terhubung ke table database
mysqli_query($koneksi, "DELETE FROM dataDsn WHERE noDsn =$del");

// kembali ke php sebelumnya
header("location:dataDsn.php");