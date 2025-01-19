<?php
session_start(); 

if (isset($_SESSION['username'])) { 

 header("Location: dashboard.php"); 

} 

?>
<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGIN</title>
  <link rel="stylesheet" href="style_login_utama.css">
</head>
<body>
  <div class="wrapper">
    <form method="post" action="cek_login3.php">
      <h2>GAGAL LOGIN</h2>
      <h3>Kamu memiliki 1x kesempatan lagi</H3>
        <div class="input-field">
        <input type="text"  name="username"required>
        <label>Masukan Email Atau Nomor</label>
      </div>
      <div class="input-field">
        <input type="text" name="password" required>
        <label>Masukan Password</label>
      </div>
      <div class="forget">
        <label for="remember">
          <input type="checkbox" id="remember">
          <p>ingat aku</p>
        </label>
        <a href="index2.html">Lupa password?</a>
      </div>
      <button type="submit" name="login">MASUK</button>
      <div class="register">
        <p>Tidak punya akun? <a href="register.html">Buat</a></p>
      </div>
    </form>
  </div>
</body>
</html>