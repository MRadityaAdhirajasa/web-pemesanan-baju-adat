<?php
include 'koneksi.php';

$sql = "SELECT pesanan.Id_pesanan, pesanan.Tanggal_Pesanan, pesanan.Tanggal_Pengiriman, pesanan.Lama_sewa, pesanan.Total_Harga, pesanan.Status_Pesanan ,produk.Nama_Produk, pelanggan.Nama, pesanan.notif
FROM pesanan, produk, pelanggan
where pesanan.Id_Produk = produk.Id_Produk AND pelanggan.Id_pelanggan=4;";
$result = mysqli_query($conn, $sql);

$sql2 = "SELECT * FROM pelanggan WHERE Id_pelanggan = 4";
$result2 = mysqli_query($conn, $sql2);
$test = mysqli_fetch_assoc($result2);
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
            <li class="li-nav-2"><a href="cost_masuk.php"><img src="img/logo.png" alt="logo" width="70" height="50"></a></li>
            <li class="li-nav-2" style="position:absolute; left:26%; top:5px"><div class="input-group mb-3" ><button style="background-color: white; border:none" class="image-button"><img src="img/search.png" alt="search"></button><input  type="text" class="form-control" placeholder="Cari Disini" aria-label="Username" aria-describedby="basic-addon1" size="70"></div></a></li>
            <li class="li-nav-2" style="float:right; margin-top:10px"><a href="cost_notifikasi.php"><img src="img/notif.png" alt="logo" width="40" height="30"></a></li>
            <li class="li-nav-2" style="float:right; margin-top:10px"><a href="cost_masuk.php"><img src="img/home.png" alt="logo" width="40" height="30"></a></li>
            <li class="li-nav-2" style="float:right; margin-top:10px"><a href="cost_akun.php"><img src="img/acc.png" alt="logo" width="40" height="30"></a></li>
            <li class="li-nav-2" style="float:right; margin-top:12px"><a href="cost_keranjang.php"><img src="img/basket.png" alt="logo" width="30" height="25"></a></li>
        </ul>    
    </div>


    <div class="container">
        <figure>
            <h3>Notifikasi</h3>
        </figure>
        <br>

        <div style="height:380px; background-color: #3333">
            <!-- <div style="padding: 10px; width:30%">
                <div style="display:flex; justify-content: space-between">
                    <h5 style="font-weight: bold;">07 Juni 2023</h5><h5 style="font-weight: bold;">07.01</h5>
                </div>
                <div>
                    <p>Paket telah diberikan ke kurir</p>
                </div>
                <hr style="border: 1px solid black;">
            </div>

            <div style="padding: 10px; width:30%">
                <div style="display:flex; justify-content: space-between">
                    <h5 style="font-weight: bold;">07 Juni 2023</h5><h5 style="font-weight: bold;">10.00</h5>
                </div>
                <div>
                    <p>Kurir Dalam Perjalanan</p>
                </div>
                <hr style="border: 1px solid black;">
            </div> -->
        
            <div class="table-responsive">
            <table class="table align-middle">
            <thead>
                    <tr class="hideme">
                    <th >Nama Produk</th>
                        <th >Tanggal Pesanan</th>
                        <th >Tanggal Pengiriman</th>
                        <th >Status</th>
                        <th >Notifikasi</th>
                        <!-- <th >Foto</th>
                        <th >Nama</th>
                        <th >Deskripsi</th>
                        <th >Stok</th>
                        <th >Harga</th>
                        <th >Action</th> -->
                    </tr>
                </thead>
                <tbody>
                <?php while ($fetch = mysqli_fetch_assoc($result)) { ?>
                    <tr style="background-color: #3333;">
                        <td style="display: none;"><?php echo $fetch['Id_pesanan']; ?></td>
                        <td><?php echo $fetch['Nama_Produk']?></td>
                        <td><?php echo $fetch['Tanggal_Pesanan']?></td>
                        <td><?php echo $fetch['Tanggal_Pengiriman']?></td>
                        <td><?php echo $fetch['Status_Pesanan']?></td>
                        <td><?php echo $fetch['notif']?></td>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

            
        </div>
    </div>
    
    <footer class="login-box" style="margin-top: 180px">
    
    <div class="container-xxl">
        <div><hr style="border: 2px solid black; border-radius: 5px"></div> 
        <div class="d-inline-flex p-2" >
            <img src="img/profile_2.png" alt="foto"  width="50" height="50">
            <div class="d-flex flex-column mb-3" style="height: 1px">
            <h6><?php echo $test['Nama']; ?></h6> 
            <h6><?php echo $test['Email']; ?></h6>

            </div>

            <div><a href="cost_home.php" style="position:absolute; right:110px" class="btn btn-dark">Logout</a></div>
        </div>
    </div>
    </footer>
      

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>