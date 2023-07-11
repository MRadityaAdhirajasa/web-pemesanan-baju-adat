<?php
include 'koneksi.php';

$sql = "SELECT pesanan.Id_pesanan, pesanan.Tanggal_Pesanan, pesanan.Tanggal_Pengiriman, pesanan.Lama_sewa, pesanan.Total_Harga, pesanan.Status_Pesanan ,produk.Nama_Produk, pelanggan.Nama
FROM pesanan, produk, pelanggan
where pesanan.Id_Produk = produk.Id_Produk AND pelanggan.Id_pelanggan=4;";
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


    <div class="container-fluid">
        <!-- <figure>
            <h1>Data</h1>
        </figure> -->
        <br>

        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr class="hideme">
                        <th >Nama Pemesan</th>
                        <th >Nama Produk</th>
                        <th >Tanggal Pesanan</th>
                        <th >Tanggal Pengiriman</th>
                        <th >Lama Sewa</th>
                        <th >Total Harga</th>
                        <th >Pembayaran</th>
                        <th >Status</th>
                        <th >Action</th>
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
                        <td><?php echo $fetch['Nama']?></td>
                        <td><?php echo $fetch['Nama_Produk']?></td>
                        <td><?php echo $fetch['Tanggal_Pesanan']?></td>
                        <td><?php echo $fetch['Tanggal_Pengiriman']?></td>
                        <td><?php echo $fetch['Lama_sewa']?></td>
                        <td><?php echo 'Rp '.$fetch['Total_Harga'].'.000'?></td>
                        <td>Lunas</td>
                        <td><?php echo $fetch['Status_Pesanan']?></td>
                        <td>
                            <a href="admin_kelola_pesanan_ubah.php?Id_pesanan=<?php echo $fetch['Id_pesanan']; ?>" class="btn btn-dark">Ubah Status</a>
                            <a href="admin_kelola_pesanan_hapus_query.php?Id_pesanan=<?php echo $fetch['Id_pesanan']; ?>" class="btn btn-dark">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
    </div>
    </div>

    <footer class="login-box" style="margin-top: 330px">
    
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