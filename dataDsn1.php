<!DOCTYPE html>
<html lang="en">
<!-- untuk menghubungkan ke css style -->
<link href="ulli.css" type="text/css" rel="stylesheet">
<body>

  
    <ul>
        <li><a href="dashboard1.php">Home</a></li>
        <li><a href="dataMhs1.php">Data Mahasiswa</a></li>
        <li><a href="dataDsn1.php">Data Dosen</a></li>
        <li><a href="dataUser1.php">Data User</a></li>
        <li><a href="dataMatKul1.php">Data Matakuliah</a></li>
        <li style="float: right;"><a href="login.php">logout</a></li>
        <li style="float: right;"><a href="roles1.php">roles : user</a></li>
    </ul>

    <center>
        <h2> DATA DOSEN </h2>
    </center>
    <center>
    <table id="customers" border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>NO</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Telp</th>
            <th>Jenis Kelamin</th>
          

        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from dataDsn");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nikDsn']; ?></td>
                <td><?php echo $d['namaDsn']; ?></td>
                <td><?php echo $d['tlpDsn']; ?></td>
                <td><?php echo $d['jnsKelamin']; ?></td>
                
            </tr>
        <?php
        }
        ?>
    </table>
</center>
<br>

<br>
<br>

    </body>
    </html>