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
        <h2> DATA DOSEN </h2>
    </center>

    <!-- agar atribut di tengah -->
    <center>
    <table id="customers" border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>NO</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Telp</th>
            <th>Jenis Kelamin</th>
            <th>Aksi</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        // memilih data dari localhost
        $data = mysqli_query($koneksi, "select * from dataDsn");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nikDsn']; ?></td>
                <td><?php echo $d['namaDsn']; ?></td>
                <td><?php echo $d['tlpDsn']; ?></td>
                <td><?php echo $d['jnsKelamin']; ?></td>
                <!-- mengarahkan ke arah koneksi penghapus data -->
                <td><a href="hapusDsn.php?del=<?php echo $d['noDsn']; ?>" 
                style="text-decoration: none; color :red">Delete</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
    </center>
    <br>
    <center>
    <a class="btnsubmit" href="tambahDsn.php">NEW +</a>
    </center>
</body>
</html>