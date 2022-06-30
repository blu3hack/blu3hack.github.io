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
    <style>
        @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');
body {
	font-family: 'Open Sans', sans-serif;
	background: linear-gradient(90deg, #FFFFFF 20%, #6c80f1 80%);
}

 h2{
	float: left;
	margin: 10px;
	position: relative;
	font-size: 30px;
}

 img{
	float: left;
	margin-left: 10px;
  margin-top: 0px;
	width: 60px;
	height: 60px;
	padding: left;
	border-radius: 50px;
}

.container {
    width: 95%;
    height: 130px;
    border: 2px solid red;
    padding: 5px;
    margin-top: 80px;
    border-radius: 20px;
    margin-left: auto;
    margin-right: auto;

}

.satu {
    width: 29%;
    height: 100px;
    border: 2px solid red;
    padding: 5px;
    margin-top: 10px;
    border-radius: 20px;
    display: inline-block;
    margin-bottom: 20px;
    background-color: red;

}

.dua {
    width: 29%;
    height: 100px;
    border: 2px solid red;
    padding: 5px;
    margin-top: 10px;
    border-radius: 20px;
    display: inline-block;
    margin-bottom: 20px;
    background-color: blue;

}

.tiga {
    width: 29%;
    height: 100px;
    border: 2px solid red;
    padding: 5px;
    margin-top: 10px;
    border-radius: 20px;
    display: inline-block;
    margin-bottom: 20px;
    background-color: green;

}

    </style>
    <meta charset="utf-8">
    <title><?php echo $_SESSION['nama']; ?></title>
  </head>
  <body>


      <img src="upload/<?php echo $_SESSION['url']; ?>" alt="">
      <h2><?php echo $_SESSION['nama']; ?></h2>

      <div class="container">
        <div class="satu"></div>
        <div class="dua"></div>
        <div class="tiga"></div>
      </div>

      <div class="container">
        <div class="satu"></div>
        <div class="dua"></div>
        <div class="tiga"></div>
      </div>

      <div class="container">
        <div class="satu"></div>
        <div class="dua"></div>
        <div class="tiga"></div>
      </div>
      <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>
