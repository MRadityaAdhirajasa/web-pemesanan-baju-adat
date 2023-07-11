<?php
include 'koneksi.php';

if (isset($_GET['Id_pesanan'])) {
    $id = ($_GET["Id_pesanan"]);

    $sql = "SELECT * FROM pesanan WHERE Id_pesanan='$id'";
    $result = mysqli_query($conn, $sql);

    if(!$result){
      die ("Query Error: ".mysqli_errno($conn).
         " - ".mysqli_error($conn));
    }
   
    $fetch = mysqli_fetch_assoc($result);
       if (!count($fetch)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='admin_kelola_pesanan.php';</script>";
       }
  } else {
    echo "<script>alert('Masukkan data id.');window.location='admin_kelola_pesanan.php';</script>";
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
            <li class="li-nav-2"><a href="admin_home.php"><img src="img/logo.png" alt="logo" width="70" height="50"></a></li>
            <li class="li-nav-active"><a href="admin_kelola_pesanan.php">Kelola Pesanan</a></li>
            <li class="li-nav"><a href="admin_kelola_produk.php">Kelola Produk</a></li>
        </ul>    
    </div>


    <div class="container">
        <figure>
            <h3>Ubah Data Pesanan</h3>
        </figure>
        <br>

        <div style="height:500px; background-color: #3333">
            <div class="d-flex flex-row mb-3">
            <div class="p-2" style="width:220px;">
                <img style="position:relative; left:30px; top:20px;" src="img/profile_2.png" alt="foto" width="150" height="150">
            </div>
            <div class="d-flex flex-column mb-3" style="margin-top: 10px">
                <label for="username">Username</label>
                <input type="text" name="username" value="<?php echo $test['Nama']; ?>" disabled size="50">
                <br>
                <label for="email">Email</label>
                <input type="text" name="email" value="<?php echo $test['Email']; ?>" disabled size="50">
                <br>
                <label for="alamat">Alamat</label>
                <input value="<?php echo $test['Alamat']; ?>" type="text" name="alamat" disabled size="50">
                <br>
                <label for="no_hp">No HP</label>
                <input value="<?php echo $test['No_telp']; ?>" type="text" name="no_hp" disabled size="50">
                <br>

                <form method="post" action="admin_kelola_pesanan_ubah_query.php" enctype="multipart/form-data">

                <input type="hidden" name="id_pesanan" value="<?php echo $fetch['Id_pesanan']; ?>"><br>
                
                <label for="tanggal_pengiriman">Tanggal Pengiriman</label><br>
                <input value="<?php echo $fetch['Tanggal_Pengiriman']; ?>" type="date" name="tanggal_pengiriman">
                <br><br>
                <label for="ubah_status">Ubah Status</label><br>
                <input value="<?php echo $fetch['Status_Pesanan']; ?>" type="text" name="ubah_status">
            </div>
            </div>
               <div style="text-align: right; margin-top:-70px;" > 
            <button  type="submit" class="btn btn-dark" name="submit">Simpan</button>
            </div>
                </form>

        </div>
        
        
    </div>

    <footer class="login-box" style="margin-top: 280px">
    
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