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
  <title>GAGAL LOGIN</title>
  <link rel="stylesheet" href="style_login_utama.css">
</head>
<body>
  <div class="wrapper">
    <form method="post" action="index.php">
      <h2>kAMU TERBLOKIR!</h2>
      <h3>Kamu sudah login sebanyak 3x</H3><br>
      <h3>Kami Tidak Bisa Memastikan Bahwa Kamu Bagian Dari Kami</h3>
        
      <button type="submit" name="login">Halaman Utama Zack Site</button>
      <div class="register">
        <p>Tidak punya akun? <a href="register.html">Buat</a></p>
      </div>
    </form>
  </div>
</body>
</html>