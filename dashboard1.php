<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- untuk menghubungkan ke css style -->
    <link href="ulli.css" type="text/css" rel="stylesheet">   
</head>

<body>
    <ul>
        <li><a href="dashboard1.php">Home</a></li>
        <li><a href="dataMhs1.php">Data Mahasiswa</a></li>
        <li><a href="dataDsn1.php">Data Dosen</a></li>
        <li><a href="dataUser1.php">Data User</a></li>
        <li><a href="dataMatKul1.php">Data Matakuliah</a></li>
        <!-- float right berguna agar menu bar mengambang di kanan  -->
        <li style="float: right;"><a href="login.php">logout</a></li>
        <li style="float: right;"><a href="roles1.php">roles : user</a></li>
    </ul>

    <!-- agar atribut di tengah -->
    <center>
    <h2> Tentang Pembuat </h2>
    </center>

    <!-- agar atribut di tengah -->
    <center><img src="apis.jpg" alt=""> <br>
        <strong>
            <!-- menggunakan font aferd -->
            <p style="font-family:aferd, sans-serif;"> Hafidz Sabri Nurrahman</p>
            <p style="font-family:aferd, sans-serif;"> Mahasiswa Sistem Informasi</p>
            <p style="font-family:aferd, sans-serif;"> Universitas pembangunan jaya</p>
        </strong>
    </center>
</body>
</html>