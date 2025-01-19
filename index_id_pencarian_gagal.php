<!DOCTYPE html>
<!-- Coding By CodingNepal - halaman utama sebelum login nama file ""index" -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zackblacks</title>
  <link rel="stylesheet" href="style_index.css">
  <!-- Google Icons Link -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
</head>
<body>
  <header>
    <nav class="navbar">
      <a href="#" class="logo">
        <img src="images/20250115_060823.png" alt="Zackblacks Site">
      </a>
      <div class="button"><a href="#popup">Mimin Arahin Yuk!</a></div>
      <ul class="menu-links">
        <li><a href="My_album_notlogin.php">Album Foto</a></li>
        <li><a href="zacktube_notlogin.php">Zack Tube</a></li>
        <li class="language-item">
          <a href="index_eng.php">
            <span class="material-symbols-outlined">language</span>
            English
          </a>
        </li>
        <li><a href="penjelajah_situs.html">Eksplore lebih dalam</a></li>
        <li><a href="login.php">Login</a></li>
        <li class="join-btn"><a href="5554541x32tx4686t4h5njn59414625245567865753875815674676479849afccafcsafedfgragargewdfa6565421654gd65szgvaz65g4v6a5r4fg6v4arfgvagrf64168r474qta1y3d64jsag646r4tga98r4g65146areg51517748932fsdfccdzvdfs4896326sdfvs496856156.html">Dasbor</a></li>
        <span id="close-menu-btn" class="material-symbols-outlined">close</span>
      </ul>
      <span id="hamburger-btn" class="material-symbols-outlined">menu</span>
    </nav>
  </header>
  <div id="popup">
    <div class="window">
      <a href="#" class="close-button" title="Close">X</a>
      <h1>Hallo kenalin Nama Mimin Chiki!<br>
      Maaf banget yaa Chiki ga bisa banyak bantu
      soalnya Chiki juga masih tahap pengembangan.<br>
      Tapi Tenang!<br>
      Web Zackblacks Site udah jadi di atas 70% kok <br>
      Jadi aman buat dijelajah:),<br>
      kalo kamu mau banyak tau tengtang web ini<br>
      kunjungin <a href="5554541x32tx4686t4h5njn59414625245567865753875815674676479849afccafcsafedfgragargewdfa6565421654gd65szgvaz65g4v6a5r4fg6v4arfgvagrf64168r474qta1y3d64jsag646r4tga98r4g65146areg51517748932fsdfccdzvdfs4896326sdfvs496856156.html">Dashboard</a>nya aja yaa!
      , Bahkan Web Zackblacks Site ini juga ada Foto Foto kamunya kok coba aja kunjungin ke <a href="My_album.html">Album foto</a>.
      Dan masih banyak yang Lainnya seperti Video, Musik, Game yang sebenernya web ini cuman di khusus in buat Temen dari Tim Chiki
      </h1>
    </div>
  </div>
  <section class="hero-section">
    <div class="content">
      <h2>Ayo Coba Temukan Berkasmu Disini!</h2>
      <h4>Maaf apa yang kamu cari sedang tidak tersedia</h4>
      <h4>Silahkan coba kembali!</h4>
      <form action="index_id_pencarian_gagal.php" class="search-form">
        <input type="text" placeholder="Apa yang mau dicari?..." required>
        <button class="material-symbols-outlined" type="sumbit" name="search">search</button>
      </form>
      <div class="popular-tags">
        Yang sering dicari:
        <ul class="tags">
          <li><a href="#">Foto Zakky</a></li>
          <li><a href="#">Motorku</a></li>
          <li><a href="#">Cinematikan</a></li>
          <li><a href="#">Video JJ</a></li>
        </ul>
      </div>
    </div>
  </section>
  
  <script>
    const header = document.querySelector("header");
    const hamburgerBtn = document.querySelector("#hamburger-btn");
    const closeMenuBtn = document.querySelector("#close-menu-btn");

    // Toggle mobile menu on hamburger button click
    hamburgerBtn.addEventListener("click", () => header.classList.toggle("show-mobile-menu"));

    // Close mobile menu on close button click
    closeMenuBtn.addEventListener("click", () => hamburgerBtn.click());
  </script>
</body>
</html>