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
        <li style="float: right;"><a href="login.php">logout</a></li>
        <li style="float: right;"><a href="roles.php">roles : admin</a></li>
    </ul>

    <center>
        <h2> DATA MATA KULIAH </h2>
    </center>

    <center>
    <table id="customers" border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>NO</th>
            <th>Kode</th>
            <th>Nama Mata kuliah</th>
            <th>Sks</th>
            <th>Semester</th>
            <th>Aksi</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from dataMatKul");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['kode']; ?></td>
                <td><?php echo $d['namaMatKul']; ?></td>
                <td><?php echo $d['SKS']; ?></td>
                <td><?php echo $d['semester']; ?></td>
                <td>
                    <a href="hapusMatKul.php?del=<?php echo $d['noMatKul']; ?>" 
                    style="text-decoration: none; color :red">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</center>
<br>
<center>
<a class="btnsubmit" href="tambahMatKul.php">NEW +</a></center>
</body>
</html>