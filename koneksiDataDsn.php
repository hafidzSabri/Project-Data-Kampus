<?php
// menyambungkan ke php perantara localhost
include 'koneksi.php';

$nikDsn = $_POST['nikDsn'];
$namaDsn = $_POST['namaDsn'];
$tlpDsn = $_POST['tlpDsn'];
$jnsKelamin = $_POST['jnsKelamin']; 

// masukkan data input ke localhost
$sql = "insert into dataDsn values('','$nikDsn','$namaDsn','$tlpDsn','$jnsKelamin')";
$query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
if ($query) {
	// pesan kalau data tersimpan
	echo "<script>alert('Data Berhasil Di Input'); window.location.href='dataDsn.php'</script>";
} else {
	// pesan kalau data tidak tersimpan
	echo "<script>alert('Data Eror / Gagal'); window.location.href='dataDsn.php'</script>";
}