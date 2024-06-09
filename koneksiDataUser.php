<?php
// menyambungkan ke php perantara localhost
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$roles = $_POST['roles'];

// masukkan data input ke localhost
$sql = "insert into datalogin values('', '$username','$password','$roles')";
$query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
if ($query) {
	// pesan kalau data tersimpan
	echo "<script>alert('Data Berhasil Di Input'); window.location.href='dataUser.php'</script>";
} else {
	// pesan kalau data tidak tersimpan
	echo "<script>alert('Data Eror / Gagal'); window.location.href='dataUser.php'</script>";
}