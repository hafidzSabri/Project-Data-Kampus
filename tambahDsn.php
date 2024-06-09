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
    <link href="boxTambah.css" type="text/css" rel="stylesheet">
</head>

<body>
    <div>
    <div>
        <form method="post" action="koneksiDataDsn.php">
            <div class="form-container">
                <h1> Tambah Data Dosen </h1>

                <div class="txtField">
                    <label for="nikDsn">NIK</label>
                    <input id="nikDsn" type="text" name="nikDsn" placeholder="Masukkan Nomor NIK Anda" required> 
                </div>

                <div class="txtField">
                    <label for="namaDsn">Nama Anda</label>
                    <input id="namaDsn" type="text" name="namaDsn" placeholder="Masukkan Nama Anda" required> 
                </div>

                <div class="txtField">
                    <label for="tlpDsn">Telepon</label>
                    <input id="tlpDsn" type="text" name="tlpDsn" placeholder="Masukkan No.Telp Anda" required> 
                </div>
                
                <div class="gender">
                    <label>Jenis Kelamin :</label>
                    <div class="radio-group">
                        <input class="radio-size" type="radio" name="jnsKelamin" value="Laki-laki" required> <label>Laki-laki</label><br>
                        <input class="radio-size" type="radio" name="jnsKelamin" value="Perempuan" required> <label>Perempuan</label> <br> 
                    </div>
                </div>

                <div class="btn-group"> 
                    <button class="btn-simpan" type="submit" value="save">TAMBAH</button>
                    <button class="btn-close" type="button"><a href = "dataDsn.php">KEMBALI</a></button>
                </div> 
        </form>
    </div>
    </div>
</body>
</html>