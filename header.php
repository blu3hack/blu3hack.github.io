<?php
include 'conn.php';
session_start();
echo "<br>";
$query = "SELECT * FROM form where id=$_SESSION[id]";
$hasil = mysqli_query($conn, $query);
if (mysqli_num_rows($hasil)>0){
    while ($data = mysqli_fetch_assoc($hasil)){
      $_SESSION['url'] = $data['url'];
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $_SESSION['nama']; ?></title>
    <link rel="stylesheet" href="css/styleheader.css">
  </head>
  <body>
      <img src="upload/<?php echo $_SESSION['url']; ?>" alt="">
      <h2><?php echo $_SESSION['nama']; ?></h2>
    <nav>
      <a href="#">Home</a>
      <a href="#">About</a>
      <a href="#">Blog</a>
      <a href="#">Portfolio</a>
      <a href="logout.php">Logout</a>
      <div class="animation start-home"></div>
    </nav>

  </body>
</html>
