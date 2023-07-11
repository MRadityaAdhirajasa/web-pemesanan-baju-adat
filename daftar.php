<?php
include 'koneksi.php';
include 'daftar_query.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Pemesanan Baju Adat</title>
</head>
<body>

    <!-- <div class="navbar">
        <img class="logo" src="img/logo2.png" width="150px" height="150px">
    </div>  -->

    

    <div class="container-fluid">
        <ul class="ul-nav">
            <li class="li-nav-2"><a href="cost_home.php"><img src="img/logo.png" alt="logo" width="70" height="50"></a></li>
        </ul>    
    </div>

    <div class="form-login">
            <h1>Daftar Sekarang</h1>
            <p1>Sudah punya akun ? <a href="login.php">masuk</a></p1>

            <form method="post" action="">
                <br>
                <div class="input" style="text-align:center">
                <input style="width:240px; height:30px" type="email" name="email" placeholder="email"  required="true">
                <input style="width:240px; height:30px" type="text" name="username" placeholder="username"  required="true">
                <input style="width:240px; height:30px" type="password" name="password" placeholder="password"  required="true">
                </div>

                <button class="button" type="submit" name="submit">Daftar</button>
            </form>
    </div>

</body>
</html>