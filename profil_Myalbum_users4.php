<?php
session_start();
if (!isset($_SESSION['username'])) { 

	header("Location: login.php"); 
   
   } 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$_SESSION['username']?> - Zack Site</title>
    <script type="text/javascript"> (function() { var css = document.createElement('link'); css.href = 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'; css.rel = 'stylesheet'; css.type = 'text/css'; document.getElementsByTagName('head')[0].appendChild(css); })(); </script>
    <link rel="stylesheet" href="page_people/assets/css/app.css">
    <link rel="stylesheet" href="page_people/assets/css/theme.css">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <a class="navbar-brand font-weight-bolder mr-3" href="dashboard.php"><img src="page_people/assets/img/20250115_060100.png"></a>
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
    		<a class="nav-link active" href="My_album.php">Home</a>
    		</li>
    		<li class="nav-item">
    		<a class="nav-link" href="post.html">Post</a>
    		</li>
    		<li class="nav-item">
    		<a class="nav-link" href="profil_Myalbum_users.php"><img class="rounded-circle mr-2" src="page_people/assets/img/<?=$_SESSION['username']?>.jpg" width="30"><span class="align-middle"><?=$_SESSION['username']?>.jpg</span></a>
    		</li>
    		<li class="nav-item dropdown">
    		<a class="nav-link" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    		<svg style="margin-top:10px;" class="_3DJPT" version="1.1" viewbox="0 0 32 32" width="21" height="21" aria-hidden="false" data-reactid="71"><path d="M7 15.5c0 1.9-1.6 3.5-3.5 3.5s-3.5-1.6-3.5-3.5 1.6-3.5 3.5-3.5 3.5 1.6 3.5 3.5zm21.5-3.5c-1.9 0-3.5 1.6-3.5 3.5s1.6 3.5 3.5 3.5 3.5-1.6 3.5-3.5-1.6-3.5-3.5-3.5zm-12.5 0c-1.9 0-3.5 1.6-3.5 3.5s1.6 3.5 3.5 3.5 3.5-1.6 3.5-3.5-1.6-3.5-3.5-3.5z" data-reactid="22"></path></svg>
    		</a>
    		
    	</ul>
    </div>
    </nav>    
    <main role="main">
        
    
    <div class="jumbotron border-round-0 min-50vh" style="background-image:url(page_people/<?=$_SESSION['username']?>/2.JPG);">
    </div>
    <div class="container mb-4">
    	<img src="page_people/<?=$_SESSION['username']?>/1.JPG" class="mt-neg100 mb-4 rounded-circle" width="128">
    	<h1 class="font-weight-bold title"><?=$_SESSION['username']?></h1>
    	<p>
    		Halaman ke 5
    	</p>
    </div>
    <div class="container-fluid mb-5">
    	<div class="row">
    		<div class="card-columns">
    			<div class="card card-pin">
    				<img class="card-img" src="page_people/<?=$_SESSION['username']?>/21.JPG" alt="Card image">
    				<div class="overlay">
    					<h2 class="card-title title">Some Title</h2>
    					<div class="more">
    						<a href="post.html">
    						<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
    					</div>
    				</div>
    			</div>
    			<div class="card card-pin">
    				<img class="card-img" src="page_people/<?=$_SESSION['username']?>/22.JPG" alt="Card image">
    				<div class="overlay">
    					<h2 class="card-title title">Some Title</h2>
    					<div class="more">
    						<a href="post.html">
    						<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
    					</div>
    				</div>
    			</div>
    			<div class="card card-pin">
    				<img class="card-img" src="page_people/<?=$_SESSION['username']?>/23.JPG" alt="Card image">
    				<div class="overlay">
    					<h2 class="card-title title">Some Title</h2>
    					<div class="more">
    						<a href="post.html">
    						<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
    					</div>
    				</div>
    			</div>
    			<div class="card card-pin">
    				<img class="card-img" src="page_people/<?=$_SESSION['username']?>/24.JPG">
    				<div class="overlay">
    					<h2 class="card-title title">Some Title</h2>
    					<div class="more">
    						<a href="post.html">
    						<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
    					</div>
    				</div>
    			</div>
    			<div class="card card-pin">
    				<img class="card-img" src="page_people/<?=$_SESSION['username']?>/25.JPG">
    				<div class="overlay">
    					<h2 class="card-title title">Some Title</h2>
    					<div class="more">
    						<a href="post.html">
    						<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More </a>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
        
    </main>
	
		<p>Kamu di Page ke 5</p>
        <li><a href="profil_Myalbum_users3.php">Halaman Sebelumnya</a>
		<li><a href="profil_Myalbum_users1.php">2</a><br>
		<li><a href="profil_Myalbum_users2.php">3</a><br>
		<li><a href="profil_Myalbum_users3.php">4</a><br>
		<li><a href="profil_Myalbum_users4.php">5</a><br>
		<li><a href="profil_Myalbum_users5.php">6</a><br>
		<li><a href="profil_Myalbum_users5.php">Halaman Selanjutnya</a>

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
            <a target="_blank" class="text-dark" href="index.php"><u>My Album</u> by Zackblacks Site. 2025</a>
          </span>
          </p>
    
    
        </div>
        
    </footer>    
</body>
    
</html>
