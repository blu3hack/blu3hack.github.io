<?php
include 'conn.php';
session_start();
if (isset($_POST['submit'])){
	$email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM form";
    $hasil = mysqli_query($conn, $query);
    if (mysqli_num_rows($hasil) > 0) {
        while ($data = mysqli_fetch_assoc($hasil)) {
            if ($data['email'] == $email && $data['password'] == $password){
                $_SESSION['nama'] = $data['nama'];
                $_SESSION['id'] = $data['id'];
                header('Location: Menu.php');
            }
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
		<form action="SignIn.php" method="POST" enctype="multipart/form-data">
				<img src="img/avatar.svg">
				<h2 class="title">Fam Apps</h2>
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
            	<a href="Sign Up.php">Sign Up</a>
            	<input type="submit" name="submit" class="btn" value="Sign IN">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>