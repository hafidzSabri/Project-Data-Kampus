<?php
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include "koneksi.php";
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from datalogin where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['roles']=="2"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['roles'] = "2";
		// alihkan ke halaman dashboard admin
		header("location:dashboard.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['roles']=="1"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['roles'] = "1";
		// alihkan ke halaman dashboard pegawai
		header("location:dashboard1.php");
 
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:login.php");
	}	
}else{
	header("location:login.php");
}
 
?>