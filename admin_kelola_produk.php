<?php
include 'koneksi.php';

$sql = "SELECT * FROM produk";
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
            <li class="li-nav"><a href="admin_kelola_pesanan.php">Kelola Pesanan</a></li>
            <li class="li-nav-active"><a href="admin_kelola_produk.php">Kelola Produk</a></li>
        </ul>    
    </div>


    <div class="container-sm">
        <a href="admin_tambah_produk.php" class="btn btn-dark">+ Tambah Produk</a>
    </div>

    <div class="container">
        <!-- <figure>
            <h1>Data</h1>
        </figure> -->
        <br>

        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr class="hideme">
                        <th class="offscreen">Foto</th>
                        <th class="offscreen">Nama</th>
                        <th class="offscreen">Deskripsi</th>
                        <th class="offscreen">Stok</th>
                        <th class="offscreen">Harga</th>
                        <th class="offscreen">Action</th>
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
                        <td style="display: none;"><?php echo $fetch['Id_Produk']; ?></td>
                        <td><img src = "img/<?php echo $fetch['foto']?>" height = "80" width = "100"/></td>
                        <td><?php echo $fetch['Nama_Produk']?></td>
                        <td><?php echo $fetch['Deskripsi_Produk']?></td>
                        <td><?php echo $fetch['Stok']?></td>
                        <td><?php echo 'Rp. '.$fetch['Harga_Sewa_perHari'].'.000'?></td>
                        <td>
                            <a href="admin_ubah_produk.php?Id_Produk=<?php echo $fetch['Id_Produk']; ?>" class="btn btn-dark">Ubah</a>
                            <a href="admin_hapus_produk_query.php?Id_Produk=<?php echo $fetch['Id_Produk']; ?>" class="btn btn-dark">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
    </div>
    </div>

    <footer class="login-box" style="margin-top: 230px">
    
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