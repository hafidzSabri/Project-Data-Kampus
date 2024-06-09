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
        <form method="post" action="koneksiDataUser.php">
            <div class="form-container">
                <h1> Tambah Data User </h1>

                <div class="txtField">
                    <label for="nimMhs">username</label>
                    <input id="nimMhs" type="text" name="username" placeholder="Masukkan Username Anda" required> 
                </div>

                <div class="txtField">
                    <label for="namaMhs">password</label>
                    <input id="namaMhs" type="text" name="password" placeholder="Masukkan Password Anda" required> 
                </div>

                <div class="txtField">
                    <label for="telpMhs">Peran</label>
                    <input id="telpMhs" type="text" name="roles" placeholder="Masukkan Peran Anda (1/2)" required> 
                </div>

                <div class="btn-group"> 
                    <br>
                    <button class="btn-simpan" type="submit" value="save">SIMPAN</button>
                    <button class="btn-close" type="button"><a href = "dataUser.php">KEMBALI</a></button>
                </div> 
        </form>
    </div>
    </div>
</body>
</html>