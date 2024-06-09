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
        <form method="post" action="koneksiDataMhs.php">
            <div class="form-container">
                <h1> Tambah Data Mahasiswa </h1>
                
                <div class="txtField">
                    <label for="nimMhs">NIM</label>
                    <input id="nimMhs" type="text" name="NIM" placeholder="Masukkan NIM Anda" required> 
                </div>

                <div class="txtField">
                    <label for="namaMhs">Nama Mahasiswa</label>
                    <input id="namaMhs" type="text" name="namaMhs" placeholder="Masukkan Nama Anda" required> 
                </div>

                <div class="txtField">
                    <label for="telpMhs">Telepon</label>
                    <input id="telpMhs" type="text" name="telepon" placeholder="Masukan No.Telp Anda" required> 
                </div>

                <div class="txtField">
                    <label for="alamatMhs">Alamat</label>
                    <input id="alamatMhs" type="text" name="alamat" placeholder="Masukkan Alamat Anda" required> 
                </div>

                <div class="gender">
                    <label>Jenis Kelamin :</label>

                    <div class="radio-group">
                        <input class="radio-size" type="radio" name="jnsKelamin" value="Laki-laki" required> <label>Laki-laki</label><br>
                        <input class="radio-size" type="radio" name="jnsKelamin" value="Perempuan" required> <label>Perempuan</label> <br> 
                    </div>
                </div>

                <div class="btn-group"> 
                    <button class="btn-simpan" type="submit" value="save">SIMPAN</button>
                    <button class="btn-close" type="button"><a href = "dataMhs.php">KEMBALI</a></button>
                </div> 
        </form>
    </div>
    </div>
</body>
</html>