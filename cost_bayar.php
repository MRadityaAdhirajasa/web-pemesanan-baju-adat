<?php
include 'koneksi.php';

$sql = "SELECT pesanan.Id_pesanan, pesanan.Tanggal_Pesanan, produk.Nama_Produk ,produk.foto, produk.Deskripsi_Produk, pesanan.Lama_sewa ,produk.Harga_Sewa_perHari*pesanan.Lama_sewa AS Total_Harga
        FROM produk, pesanan
        WHERE produk.Id_Produk=pesanan.Id_Produk;";
$result = mysqli_query($conn, $sql);
$fetch = mysqli_fetch_assoc($result);

$total = "SELECT sum(pesanan.Total_Harga) as total
        FROM pesanan;";
$total2 = mysqli_query($conn, $total);
$total3 = mysqli_fetch_assoc($total2);

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
            <h3>Bayar</h3>
        </figure>
        <br>

        <div style="height:380px;">

        <div class="container-md" style="background-color: #3333; height:360px">
        
        <form method="post" action="cost_bayar_query.php" enctype="multipart/form-data">

            <div class="mb-3 row">
                <label for="total" class="col-sm-2 col-form-label">Total</label>
                <div class="col-sm-10">
                    <input value="<?php echo 'Rp. '.$total3['total'].'.000'; ?>"  class="form-control" name="total">
                </div>
            </div>
            

            <div class="mb-3 row">
                <label for="metode_bayar" class="col-sm-2 col-form-label">Metode Bayar</label>
                <div class="col-sm-10">
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="metode_bayar">
                        <option selected>Pilih Metode Bayar</option>
                        <option id="virtual_account" value="virtual_account">Virtual Account</option>
                        <option id="transfer" value="transfer">Transfer</option>
                    </select>
                </div>
            </div>


            <button style="float:right" type="submit" class="btn btn-dark" name="submit">Bayar</button>

        </form>
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