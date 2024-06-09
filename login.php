<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- untuk menghubungkan ke css style -->
    <link href="stylelogin.css" type="text/css" rel="stylesheet">
<body>

  <div class="login-box">
    <h2>Login</h2>
      <form action="loginifelse.php" method="post">
        <div class="user-box">
        
          <input type="text" name="username" id="username" required>
          <label>Username</label>
        </div>

        <div class="user-box">
          <input type="password" name="password" id="password" required>
          <label>Password</label>
        </div>

        <a>
        <input type="submit" name="LOGIN" value="Login">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          Submit
        </a>
      </form>
      <?php
      if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "gagal") {
                    echo "<p class='alert-login'>Login failed! Username atau Password salah!</p>";
                } else if ($_GET['pesan'] == "logout") {
                    echo "<p class='alert-login'>Anda telah berhasil logout</p>";
                } else if ($_GET['pesan'] == "belum_login") {
                    echo "<p class='alert-login'>Anda harus login untuk mengakses halaman admin</p>";
                }
            }
            ?>
  </div>
</body>
</head>
</html>
