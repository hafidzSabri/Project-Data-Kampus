<?php
include 'koneksi.php';

$del = $_GET['del'];

// delete terhubung ke table database
mysqli_query($koneksi, "DELETE FROM dataMahasiswa WHERE noMhs =$del");

// kembali ke php sebelumnya
header("location:dataMhs.php");