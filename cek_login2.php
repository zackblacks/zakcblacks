<?php 
// menangkap data username dan password yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
// memeriksa apakah username yang diisi adalah "admin", dan password yang diisi adalah "admin123"
if($username == "admin" && $password == "admin123"){
	// aktifkan session
	session_start();
	// buat session username dan session status. session username berisi username, dan session status berisi string "login"
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
 
	// setelah session dibuat, alihkan halaman ke halaman dashboard admin
	header("location: dashboard.php");
}else{
	// jika login gagal, alihkan halaman kembali ke halaman login dengan membuat parameter pesan yang berisi "gagal"
	header("location: gagal_login2.php");	
}
if($username == "zakky" && $password == "zakky123"){
	// aktifkan session
	session_start();
	// buat session username dan session status. session username berisi username, dan session status berisi string "login"
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
 
	// setelah session dibuat, alihkan halaman ke halaman dashboard admin
	header("location: dashboard.php");
}else{
	// jika login gagal, alihkan halaman kembali ke halaman login dengan membuat parameter pesan yang berisi "gagal"
	header("location: gagal_login2.php");	
}
if($username == "angga" && $password == "angga2344"){
	// aktifkan session
	session_start();
	// buat session username dan session status. session username berisi username, dan session status berisi string "login"
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
 
	// setelah session dibuat, alihkan halaman ke halaman dashboard admin
	header("location: dashboard.php");
}else{
	// jika login gagal, alihkan halaman kembali ke halaman login dengan membuat parameter pesan yang berisi "gagal"
	header("location: gagal_login2.php");	
}
if($username == "fikran" && $password == "fikran9531"){
	// aktifkan session
	session_start();
	// buat session username dan session status. session username berisi username, dan session status berisi string "login"
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
 
	// setelah session dibuat, alihkan halaman ke halaman dashboard admin
	header("location: dashboard.php");
}else{
	// jika login gagal, alihkan halaman kembali ke halaman login dengan membuat parameter pesan yang berisi "gagal"
	header("location: gagal_login2.php");	
}
if($username == "Risky_smp" && $password == "Risky6599"){
	// aktifkan session
	session_start();
	// buat session username dan session status. session username berisi username, dan session status berisi string "login"
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
 
	// setelah session dibuat, alihkan halaman ke halaman dashboard admin
	header("location: dashboard.php");
}else{
	// jika login gagal, alihkan halaman kembali ke halaman login dengan membuat parameter pesan yang berisi "gagal"
	header("location: gagal_login2.php");	
}
?>