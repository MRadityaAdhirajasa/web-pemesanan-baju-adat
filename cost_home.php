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
            <li class="li-nav-2"><a href="cost_home.php"><img src="img/logo.png" alt="logo" width="70" height="50"></a></li>
            <li class="li-nav"><a  href="daftar.php">Daftar</a></li>
            <li class="li-nav"><a href="login.php">Masuk</a></li>
        </ul>    
    </div>



    <div class="container-sm">
       
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
                            <a href="#" class="btn btn-dark">Pesan</a>
                        </td>
                    </tr>
                    
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>


      

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>