<?php
include 'conn.php';
session_start();

    if (isset($_POST['submit'])){
        $url  = $_FILES['url'] ['name'];
        $lok   = $_FILES['url'] ['tmp_name'];
        $error = $_FILES['url'] ['error'];
        $size  = $_FILES['url'] ['size'];
        $type  = $_FILES['url'] ['type'];
        $update = "UPDATE form SET url='$url' where id=$_SESSION[id]";
        if (mysqli_query($conn, $update)) {
            $_SESSION['url'] = $url;
        }
            if ($size > 1000000){
                echo "Gambar terlalu Besar (max 1MB)";
            }else{
                if ($type == 'image/jpeg' || $type == 'image/jpeg' || $type == 'image/jpeg') {
                    move_uploaded_file($lok, 'upload/'. $url);
                    header('Location: Profile.php');
                }else {
                    echo "Format tidak sesuai (jpeg jpg PNG)";
                }
            }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styleHome.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Sansita:wght@400;700&display=swap');

body{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Sansita', sans-serif;
    font-size: 18px;
    letter-spacing: 1.2px;
   
}
.wrapper{
    position: absolute;
    width: 100%;
    height: 100vh;
    background: linear-gradient(90deg, #FFFFFF 20%, #0d2eeb 80%);
    
}
.container{
    position: relative;
    text-align: center;
    top: 10%;
}
.container h1{
    font-size: 40px;
    color: rgb(0, 0, 0);
    font-weight: 400;
    transition: all 1s ease-in-out;
    padding: 0px;
    margin-top: 10px;
    
}

img{
    width: 100px;
    height: 100px;
    border-radius: 50px;
    margin-top: 2px;
}

.btn {
    display: inline-block;
    width: 200px;
    height: 50px;
    background: #3B44F6;
    font-size: 20px;
    color: #FFFFFF;
    border-radius: 20px;
    margin-top: 10px;
    cursor: pointer;
}
.btn:hover {
    background: #f84e4e;
    color: #FFFFFF;
    text-decoration: none;
}

form .input {
    background: #3B44F6;
    color: #FFFFFF;

}
    </style>
    <title><?php echo $_SESSION['nama']; ?></title>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <a href="" class=""><img src="img/avatar.svg"></a>
            <h1>Welcome <?php echo $_SESSION['nama']; ?></h1>
            <h5>Upload Profile Picture</h5>
            <form action="Home.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="url" placeholder="url" class="input">
                <br>
                <br>
                <input type="submit" name="submit" value="Upload" class="btn">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>