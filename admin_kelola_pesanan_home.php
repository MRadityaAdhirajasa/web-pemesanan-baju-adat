<?php
include 'koneksi.php';

$sql = "SELECT * FROM pesanan";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Baju Adat</title>

    <!-- css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    
    <div class="container-fluid">
        <ul class="ul-nav">
            <li class="li-nav-2"><a href="admin_home.php"><img src="img/logo.png" alt="logo" width="70" height="50"></a></li>
            <li class="li-nav-active"><a href="admin_kelola_pesanan.php">Kelola Pesanan</a></li>
            <li class="li-nav"><a href="admin_kelola_produk.php">Kelola Produk</a></li>
        </ul>    
    </div>

    <div class="container">
        <figure>
            <h3>Laporan Pemesanan</h3>
        </figure>

    <section class="container-sm" style="margin-top: 100px">
        <div style="display: flex; justify-content: space-between;">
            <a href="admin_kelola_pesanan.php"><img src="img/pesanan_1.png" alt="pesan"></a> 
            <img src="img/pesanan_2.png" alt="pesan">
            <img src="img/pesanan_3.png" alt="pesan">
            <img src="img/pesanan_4.png" alt="pesan">
        </div>
    </section>

    </div>

    <footer class="login-box" style="margin-top: 160px">
    
        <div class="container-xxl">
            <div><hr style="border: 2px solid black; border-radius: 5px"></div> 
            <div class="d-inline-flex p-2" >
                <img src="img/profile.png" alt="foto">
                <div class="d-flex flex-column mb-3" style="height: 1px">
                <h6>Admin1</h6> 
                <h6>admin1@gmail.com</h6>
                </div>

                <div><a href="cost_home.php" style="position:relative; right:-1050px" class="btn btn-dark">Logout</a></div>
            </div>
        </div>
    </footer>
      

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>