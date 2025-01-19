<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - Zack Site</title>
    <script type="text/javascript"> (function() { var css = document.createElement('link'); css.href = 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'; css.rel = 'stylesheet'; css.type = 'text/css'; document.getElementsByTagName('head')[0].appendChild(css); })(); </script>
    <link rel="stylesheet" href="page_people/assets/css/app.css">
    <link rel="stylesheet" href="page_people/assets/css/theme.css">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <a class="navbar-brand font-weight-bolder mr-3" href="Dashboard.php"><img src="page_people/assets/img/20250115_060100.png"></a>
    <button class="navbar-light navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsDefault" aria-controls="navbarsDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsDefault">
    	<ul class="navbar-nav mr-auto align-items-center">
    		<form class="bd-search hidden-sm-down">
    			<input type="text" class="form-control bg-graylight border-0 font-weight-bold" id="search-input" placeholder="Search..." autocomplete="off">
    			<div class="dropdown-menu bd-search-results" id="search-results">
    			</div>
    		</form>
    	</ul>
    	<ul class="navbar-nav ml-auto align-items-center">
    		<li class="nav-item">
    		<a class="nav-link active" href="dashboard.php">Home</a>
    		</li>
    		<li class="nav-item">
    		<a class="nav-link" href="profil_myalbum_users.php"><img class="rounded-circle mr-2" src="page_people/assets/img/<?=$_SESSION['username']?>.jpg" width="30"><span class="align-middle"><?=$_SESSION['username']?></span></a>
    		</li>
    		<li class="nav-item dropdown">
    		<a class="nav-link" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    		<svg style="margin-top:10px;" class="_3DJPT" version="1.1" viewbox="0 0 32 32" width="21" height="21" aria-hidden="false" data-reactid="71"><path d="M7 15.5c0 1.9-1.6 3.5-3.5 3.5s-3.5-1.6-3.5-3.5 1.6-3.5 3.5-3.5 3.5 1.6 3.5 3.5zm21.5-3.5c-1.9 0-3.5 1.6-3.5 3.5s1.6 3.5 3.5 3.5 3.5-1.6 3.5-3.5-1.6-3.5-3.5-3.5zm-12.5 0c-1.9 0-3.5 1.6-3.5 3.5s1.6 3.5 3.5 3.5 3.5-1.6 3.5-3.5-1.6-3.5-3.5-3.5z" data-reactid="22"></path></svg>
    		</a>
    		
    		</li>
    	</ul>
    </div>
    </nav>    
    <main role="main">
        
    
    <section class="mt-4 mb-5">
    <div class="container mb-4">
    	<h1 class="font-weight-bold title">GaleriKu</h1>
    	<div class="row">
    		<nav class="navbar navbar-expand-lg navbar-light bg-white pl-2 pr-2">
    		<button class="navbar-light navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExplore" aria-controls="navbarsDefault" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
    		</button>
    		<div class="collapse navbar-collapse" id="navbarsExplore">
    			<ul class="navbar-nav">
					<div class="button"><a href="#popup">Disclaimer!</a></div>
    				<li class="nav-item">
    				<a class="nav-link" href="page_people/Fikran/zack_users.html">Fikran smp</a>
    				</li>
    				<li class="nav-item">
    				<a class="nav-link" href="page_people/angga/zack_users.php">Angga smp</a>
    				</li>
    				<li class="nav-item">
    				<a class="nav-link" href="#">Adit adek</a>
    				</li>
    				<li class="nav-item">
    				<a class="nav-link" href="page_people/damar/zack_users.html">Damar smp</a>
    				</li>
    				<li class="nav-item dropdown">
    				<a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</a>
    				<div class="dropdown-menu shadow-lg" aria-labelledby="dropdown01">
    					<a class="dropdown-item" href="page_people/Hakim/zack_users.html">Hakim Pasiraya</a>
						<a class="dropdown-item" href="page_people/Fuad/zack_users.html">Fuad</a>
    					<a class="dropdown-item" href="page_people/wahyu/zack_users.html">Wahyu Smp</a>
    					<a class="dropdown-item" href="page_people/Abid/zack_users.html">Abid Smp</a>
    					<a class="dropdown-item" href="#">Anna Smp</a>
    					<a class="dropdown-item" href="#">Dina Smp</a>
						<a class="dropdown-item" href="#">Wirda Smp</a>
						<a class="dropdown-item" href="#">Reina Smp</a>
						<a class="dropdown-item" href="#">Igar Smp</a>
    					<a class="dropdown-item" href="page_people/Eka_smk/zack_users.html">Eka Smk</a>
						<a class="dropdown-item" href="page_people/yudha/zack_users.html">Yudha Smk</a>
    					<a class="dropdown-item" href="page_people/agung/zack_users.html">Agung Smk</a>
    					<a class="dropdown-item" href="page_people/Rian/zack_users.html">Rian Smk</a>
						<a class="dropdown-item" href="page_people/Dika/zack_users.html">Dika Smk</a>
    					<a class="dropdown-item" href="page_people/risky_smk/zack_users.html">Risky Smk</a>
    					<a class="dropdown-item" href="page_people/Risky_smp/zack_users.html">Risky Smp</a>
						<a class="dropdown-item" href="#">Puji Smp</a>
    					<a class="dropdown-item" href="page_people/MMKI/Rangga/zack_users.html">Rangga Flour MMKI</a>
						<a class="dropdown-item" href="page_people/MMKI/Fajar/zack_users.html">Fajar Flour MMKI</a>
    					<a class="dropdown-item" href="page_people/MMKI/Damar/zack_users.html">Damar Flour MMKI</a>
    					<a class="dropdown-item" href="page_people/MMKI/Eka/zack_users.html">Mas Eka Flour MMKI</a>
    					<a class="dropdown-item" href="page_people/MMKI/Firman/zack_users.html">Firman Sl MMKI</a>
						<a class="dropdown-item" href="page_people/MMKI/Slamet/zack_users.html">Mas Slamet Flour MMKI</a>
						<a class="dropdown-item" href="page_people/MMKI/Anggi/zack_users.html">Anggi Flour MMKI</a>
    					<a class="dropdown-item" href="page_people/MMKI/wahyu/zack_users>html">Bg Wahyu Flour MMKI</a>
    					<a class="dropdown-item" href="page_people/MMKI/wahyu joko/zack_users.html">Wahyu Joko Flour MMKI</a>
						<a class="dropdown-item" href="page_people/MMKI/Ali/zack_users.html">Ali Flour MMKI</a>
    					<a class="dropdown-item" href="page_people/MMKI/miko/zack_users.html">Miko Flour MMKI</a>
    					<a class="dropdown-item" href="page_people/MMKI/azim/zack_users.html">Bg Azim Flour MMKI</a>
    					<a class="dropdown-item" href="page_people/MMKI/Gilang/zack_users.html">Gilang Ds MMKI</a>
						<a class="dropdown-item" href="page_people/MMKI/Asep/zack_users.html">Asep Flour MMKI</a>
    					<a class="dropdown-item" href="page_people/MMKI/Rizal/zack_users.html">Rizal Flour MMKI</a>
    					<a class="dropdown-item" href="page_people/MMKI/Ajat/zack_users.html">Ajat MMKI</a>
    					<a class="dropdown-item" href="page_people/MMKI/Leader_Zat_hendra/zack_users.html">Pak Zat Hendra MMKI</a>
    					<a class="dropdown-item" href="page_people/MMKI/Fadli/zack_users.html">BG Fadli Sopian MMKI</a>
    					<a class="dropdown-item" href="page_people/MMKI/Joko/zack_users.html">Bg Joko MMKI</a>
						<a class="dropdown-item" href="page_people/MMKI/Riza/zack_users.html">Bg Riza MMKI</a>
    				</div>
    				</li>
    			</ul>
    		</div>
    		</nav>
    	</div>
    </div>
	<div id="popup">
		<div class="window">
			<a href="#" class="close-button" title="Close">X</a>
			<h1>Disclaimer!</h1>
			<p>Hallo <?=$_SESSION['username']?>! Foto yang ada disini berarti ada zakky nya yaa!, ini murni dari galeri Hp Zakky yang 100% di take pake kamera hp zakky,<br>
			Jadi harap bijak menggunakan Web <a href="index.html">Zackblacks Site</a>  <br>Terima Kasih</p>
		</div>
	</div>
	<h2>Selamat datang <?php echo $_SESSION['username']; ?>! Ini Foto-Foto Mu lohh</h2> 
    <div class="container-fluid">
    	<div class="row">
    		<div class="card-columns">
    			<div class="card card-pin">
    				<img class="card-img" src="page_people/<?=$_SESSION['username']?>/1.JPG" alt="Card image">
    				<div class="overlay">
    					<h2 class="card-title title">Cool Title</h2>
    					<div class="more">
    						
    					</div>
    				</div>
    			</div>
    			<div class="card card-pin">
    				<img class="card-img" src="page_people/<?=$_SESSION['username']?>/2.jpg" alt="Card image">
    				<div class="overlay">
    					<h2 class="card-title title">Cool Title</h2>
    					<div class="more">
    						
    					</div>
    				</div>
    			</div>
    			<div class="card card-pin">
    				<img class="card-img" src="page_people/<?=$_SESSION['username']?>/3.jpg" alt="Card image">
    				<div class="overlay">
    					<h2 class="card-title title">Cool Title</h2>
    					<div class="more">
    						
    					</div>
    				</div>
    			</div>
    			<div class="card card-pin">
    				<img class="card-img" src="page_people/<?=$_SESSION['username']?>/4.JPG" alt="Card image">
    				<div class="overlay">
    					<h2 class="card-title title">Cool Title</h2>
    					<div class="more">
    						
    					</div>
    				</div>
    			</div>
    			<div class="card card-pin">
    				<img class="card-img" src="page_people/<?=$_SESSION['username']?>/5.JPG" alt="Card image">
    				<div class="overlay">
    					<h2 class="card-title title">Cool Title</h2>
    					<div class="more">
    						
    					</div>
    				</div>
    			</div>
    			<div class="card card-pin">
    				<img class="card-img" src="page_people/<?=$_SESSION['username']?>/6.JPG" alt="Card image">
    				<div class="overlay">
    					<h2 class="card-title title">Cool Title</h2>
    					<div class="more">
    						
    					</div>
    				</div>
    			</div>
    			<div class="card card-pin">
    				<img class="card-img" src="page_people/<?=$_SESSION['username']?>/7.jpg" alt="Card image">
    				<div class="overlay">
    					<h2 class="card-title title">Cool Title</h2>
    					<div class="more">
    						
    					</div>
    				</div>
    			</div>
    			<div class="card card-pin">
    				<img class="card-img" src="page_people/<?=$_SESSION['username']?>/8.JPG" alt="Card image">
    				<div class="overlay">
    					<h2 class="card-title title">Cool Title</h2>
    					<div class="more">
    						
    					</div>
    				</div>
    			</div>
    			<div class="card card-pin">
    				<img class="card-img" src="page_people/<?=$_SESSION['username']?>/9.JPG" alt="Card image">
    				<div class="overlay">
    					<h2 class="card-title title">Cool Title</h2>
    					<div class="more">
    						
    					</div>
    				</div>
    			</div>
    			<div class="card card-pin">
    				<img class="card-img" src="page_people/<?=$_SESSION['username']?>/10.jpg" alt="Card image">
    				<div class="overlay">
    					<h2 class="card-title title">Cool Title</h2>
    					<div class="more">
    						
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    </section>
        
    </main>
	<h2>UNTUK LEBIH BANYAK MELIHAT FOTOMU</h2><br>
	<h3>Kunjungi <a href="profil_Myalbum_users.php">Profil mu</a> pada pojok kanan atas</h3>

    <script src="page_people/assets/js/app.js"></script>
    <script src="page_people/assets/js/theme.js"></script>
    
    <footer class="footer pt-5 pb-5 text-center">
        
    <div class="container">
        
          <div class="socials-media">
    
            <ul class="list-unstyled">
              <li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i class="fa fa-facebook"></i></a></li>
              <li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i class="fa fa-twitter"></i></a></li>
              <li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i class="fa fa-instagram"></i></a></li>
              <li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i class="fa fa-google-plus"></i></a></li>
              <li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i class="fa fa-behance"></i></a></li>
              <li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i class="fa fa-dribbble"></i></a></li>
            </ul>
    
          </div>
        
            <!--
              All the links in the footer should remain intact.
              You may remove the links only if you donate:
              https://www.wowthemes.net/freebies-license/
            -->
          <p>©  <span class="credits font-weight-bold">        
            <a target="_blank" class="text-dark" href="https://zackblacks.github.io/zackblacks/"><u>My Album</u> by Zackblacks Site. 2025</a>
          </span>
          </p>
    
    
        </div>
        
    </footer>    
</body>
    
</html>
