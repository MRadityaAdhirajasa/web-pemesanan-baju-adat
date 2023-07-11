<?php
include 'koneksi.php';

if (isset($_GET['Id_Produk'])) {
    $id = ($_GET["Id_Produk"]);

    $sql = "SELECT * FROM produk WHERE Id_Produk='$id'";
    $result = mysqli_query($conn, $sql);

    if(!$result){
      die ("Query Error: ".mysqli_errno($conn).
         " - ".mysqli_error($conn));
    }
   
    $fetch = mysqli_fetch_assoc($result);
       if (!count($fetch)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='cost_masuk.php';</script>";
       }
  } else {
    echo "<script>alert('Masukkan data id.');window.location='cost_masuk.php';</script>";
  }   
  
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
            <h3>Data Diri</h3>
        </figure>
        <br>

        <div style="height:380px; background-color: #3333">
        
        <div class="d-flex flex-row mb-3">
        <div class="d-flex flex-column mb-3" style="margin-top: 10px; margin-left:20px">

                <input type="hidden" name="id" value="<?php echo $fetch['Id_Produk']; ?>"><br>
                <label for="username">Username</label>
                <input type="text" name="username" value="<?php echo $test['Nama']; ?>" size="50">
                <br>
                <label for="email">Email</label>
                <input type="text" name="email" value="<?php echo $test['Email']; ?>" size="50">
                <br>
                <label for="alamat">Alamat</label>
                <input value="<?php echo $test['Alamat']; ?>" type="text" name="alamat" size="50">
                <br>
                <label for="no_hp">No HP</label>
                <input value="<?php echo $test['No_telp']; ?>" type="text" name="no_hp" size="50">
            </div>
        </div>
            <div style="position:relative; right:-1010px; top:-30px">
            <a href="cost_keranjang_konfirmasi.php?Id_Produk=<?php echo $fetch['Id_Produk']; ?>" class="btn btn-dark">Lanjut</a>
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