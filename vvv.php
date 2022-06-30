<?php
include 'conn.php';
session_start();
if (isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $query = "SELECT * FROM form WHERE email='$email'";
    $hasil = mysqli_query($conn, $query);
    $jumlah = mysqli_num_rows($hasil);
    if($jumlah > 0) {
        $pesan = "Email Sudah terpakai";
    }else {
        $insert = "INSERT INTO form (nama, email, password) VALUE ('$nama', '$email', '$password')";
        if (mysqli_query($conn, $insert)) {
            $_SESSION['nama'] = $nama;
            header('Location: Home.php');
        }
    }
    $query = "SELECT * FROM form";
        $hasil = mysqli_query($conn, $query);
        if (mysqli_num_rows($hasil) > 0) {
            while ($data = mysqli_fetch_assoc($hasil)) {
                    $_SESSION['id'] = $data['id'];
            }
        }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>FamApps</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container">
		<div class="img">
			<img src="img/gambar.png">
		</div>
		<div class="login-content">
		<form action="Sign Up.php" method="POST" enctype="multipart/form-data">
				<img src="img/avatar.svg">
				<h2 class="title">Fam Apps</h2>
				<h5 class="title"><?php if(isset($pesan)){echo $pesan;}?></h5>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" name="nama" class="input">
           		   </div>
           		</div>
				   <div class="input-div one">
					<div class="i">
							<i class="fas fa-envelope-open-text"></i>
					</div>
					<div class="div">
							<h5>Email</h5>
							<input type="text" name="email" class="input">
					</div>
				 </div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="password" class="input">
            	   </div>
            	</div>
            	<a href="SignIn.php">Sign In</a>
            	<input type="submit" name="submit" class="btn" value="Sign UP">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>

<?php
if(isset($pesan)){
	echo $pesan;
}

?>