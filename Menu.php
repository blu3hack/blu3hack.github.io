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
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HeroBiz Bootstrap Template - Home 1</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <style>
      body{
      background: linear-gradient(90deg, #FFFFFF 40%, #c6cefc 60%);
      }

      section .header {
        margin-top: 100px;

      }

      h1 {
      float: left;
      margin-left: 10px;
      font-size: 150px;
      }

      img{
      float: left;
      margin-left: 30px;
      margin-top: -30px;
      width: 100px;
      height: 100px;
      padding: left;
      border-radius: 50px;
      }

      .container a{
        color: white;
      }

      .container {
      font-size: 20px;
      font-weight: bold;
      display: inline-block;
      padding: 10px 28px;
      border-radius: 20px;
      transition: 0.5s;
      color: black;
      background: var(--color-primary);
      font-family: var(--font-secondary);
    }
    .container:hover {
    }
  </style>
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/css/variables.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Features Section ======= -->
    <section class="header">
    <img src="upload/<?php echo $_SESSION['url']; ?>" alt="">
    <h1><?php echo $_SESSION['nama']; ?></h1>
    </section>
    <section id="features" class="features">
    
      <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row gy-4 d-flex">

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
              <i class="bi bi-binoculars color-cyan"></i>
              <h4>Pemasukan</h4>
            </a>
          </li><!-- End Tab 1 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
              <i class="bi bi-box-seam color-indigo"></i>
              <h4>Pengeluaran</h4>
            </a>
          </li><!-- End Tab 2 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
              <i class="bi bi-brightness-high color-teal"></i>
              <h4>Anggaran</h4>
            </a>
          </li><!-- End Tab 3 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
              <i class="bi bi-command color-red"></i>
              <h4>Saldo</h4>
            </a>
          </li><!-- End Tab 4 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-5">
              <i class="bi bi-easel color-blue"></i>
              <h4>Saldo</h4>
            </a>
          </li><!-- End Tab 5 Nav -->

          <li class="nav-item col-6 col-md-4 col-lg-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-6">
              <i class="bi bi-map color-orange"></i>
              <h4>AppChat</h4>
            </a>
          </li><!-- End Tab 6 Nav -->

        </ul>

        <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
      <div class="d-flex">
        <a href="SignIn.php" class="btn-get-started scrollto">MASUK</a>
        <H1>&nbsp &nbsp</H1>
        <a href="Sign Up.php" class="btn-get-started scrollto">DAFTAR</a>
      </div>
    </div>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>