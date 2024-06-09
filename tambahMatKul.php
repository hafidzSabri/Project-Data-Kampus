<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- untuk menghubungkan ke css style -->
        <link rel="stylesheet" href="boxTambah.css">
</head>

<body>
<div>
    <div>
        <form class="form-tambah" method="post" action="koneksiDataMatKul.php">
                <div class="form-container">
                        <h1> Tambah Data Mata Kuliah </h1>
                        
                        <div class="txtField">
                                <label for="kodeMatKul">Kode Mata Kuliah</label>
                                <input id="kodeMatKul" type="text" name="kode" placeholder="Masukkan Kode Mata Kuliah"required> 
                        </div>

                        <div class="txtField">
                                <label for="namaMatKul">Nama Mata Kuliah</label>
                                <input id="namaMatKul" type="text" name="namaMatKul" placeholder="Masukkan Nama Mata Kuliah" required> 
                        </div>

                        <div class="txtField">
                                <label for="sks">SKS</label>
                                <input id="sks" type="text" name="SKS" placeholder="Masukkan Jumlah SKS" required> 
                        </div>

                        <div class="txtField">
                                <label for="semester">semester</label>
                                <input id="semester" type="text" name="semester" placeholder="Pada Semester Berapa"required> 
                        </div>
                        <div class="button-group">
                                <br>
                                <button class="btn-simpan" type="submit" value="save">SIMPAN</button>
                                <button class="btn-close" type="button"><a href = "dataMatKul.php">KEMBALI</a></button>
                        </div>
        </form>
    </div>
</div>
</body>
</html>