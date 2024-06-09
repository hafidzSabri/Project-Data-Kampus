<?php
// menyambungkan ke php perantara localhost
include 'koneksi.php';

$NIM = $_POST['NIM'];
$namaMhs = $_POST['namaMhs'];
$telepon = $_POST['telepon'];
$alamat = $_POST['alamat']; 
$jnsKelamin = $_POST['jnsKelamin'];

// masukkan data input ke localhost
$sql = "insert into datamahasiswa values('','$NIM','$namaMhs','$telepon','$alamat','$jnsKelamin')";
$query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
if ($query) {
	// pesan kalau data tersimpan
	echo "<script>alert('Data Berhasil Di Input'); window.location.href='dataMhs.php'</script>";
} else {
	// pesan kalau data tidak tersimpan
	echo "<script>alert('Data Eror / Gagal'); window.location.href='dataMhs.php'</script>";
}