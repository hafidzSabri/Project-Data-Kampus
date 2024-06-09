<!DOCTYPE html>
<html lang="en">
<!-- untuk menghubungkan ke css style -->
<link href="ulli.css" type="text/css" rel="stylesheet">
<body>
    <ul>
        <li><a href="dashboard.php">Home</a></li>
        <li><a href="dataMhs.php">Data Mahasiswa</a></li>
        <li><a href="dataDsn.php">Data Dosen</a></li>
        <li><a href="dataUser.php">Data User</a></li>
        <li><a href="dataMatKul.php">Data Matakuliah</a></li>
        <!-- float right berguna agar menu bar mengambang di kanan  -->
        <li style="float: right;"><a href="login.php">logout</a></li>
        <li style="float: right;"><a href="roles.php">roles : admin</a></li>
    </ul>

    <!-- agar atribut di tengah -->
    <center>
        <h2> DATA MAHASISWA </h2>
    </center>

    <!-- agar atribut di tengah -->
    <center>
    <table id="customers" border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>NO</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Telp</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Aksi</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        // memilih data dari localhost
        $data = mysqli_query($koneksi, "select * from dataMahasiswa");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['NIM']; ?></td>
                <td><?php echo $d['namaMhs']; ?></td>
                <td><?php echo $d['telepon']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['jnsKelamin']; ?></td>
                <td><a href="hapusMhs.php?del=<?php echo $d['noMhs']; ?>" style="text-decoration: none; color :red">Delete</a></td>
            </tr>
        <?php
        }
        ?>
    </table>

    <!-- agar atribut di tengah -->
    </center>
    <br>
    <center>      
    <!-- untuk menghubungkan ke box tambah -->
    <a class="btnsubmit" href="tambahMhs.php">NEW +</a>
    </center>
</body>
</html>