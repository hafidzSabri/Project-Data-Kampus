<?php
// menyambungkan ke php perantara localhost
include 'koneksi.php';

$kode = $_POST['kode'];
$namaMatKul = $_POST['namaMatKul'];
$SKS = $_POST['SKS'];
$semester = $_POST['semester']; 

// masukkan data input ke localhost
$sql = "insert into dataMatKul values('','$kode','$namaMatKul','$SKS','$semester')";
$query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
if ($query) {
	// pesan kalau data tersimpan
	echo "<script>alert('Data Berhasil Di Input'); window.location.href='dataMatKul.php'</script>";
} else {
	// pesan kalau data tidak tersimpan
	echo "<script>alert('Data Eror / Gagal'); window.location.href='dataMatKul.php'</script>";
}