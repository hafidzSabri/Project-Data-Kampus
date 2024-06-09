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
            <h1> Roles anda adalah admin </h1>
                <div class="btn-group"> 
                    <!-- mengarah ke dasboard awal -->
                    <button class="btn-close" type="button"><a href = "dashboard.php">KEMBALI</a></button>
                </div> 
        </form>
    </div>
    </div>
</body>
</html>