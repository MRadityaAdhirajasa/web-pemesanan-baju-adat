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
          echo "<script>alert('Data tidak ditemukan pada database');window.location='admin_kelola_produk.php';</script>";
       }
  } else {
    echo "<script>alert('Masukkan data id.');window.location='admin_kelola_produk.php';</script>";
  }    
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

        <div class="container">
            <figure>
                <h2>Ubah Produk</h2>
            </figure>
        </div>

    <div class="container-md">

        <form method="post" action="admin_ubah_produk_query.php" enctype="multipart/form-data">

            <div>
                <input type="hidden" name="id" value="<?php echo $fetch['Id_Produk']; ?>"><br>
            </div>

            <div class="mb-3 row">
                <label for="nama_produk" class="col-sm-2 col-form-label">Nama Produk</label>
                <div class="col-sm-10">
                    <input value="<?php echo $fetch['Nama_Produk']?>" type="text" class="form-control" name="nama_produk">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="deskripsi" rows="2"><?php echo $fetch['Deskripsi_Produk']?></textarea>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                <div class="col-sm-10">
                    <input value="<?php echo $fetch['Stok']?>" type="text" class="form-control" name="stok">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="harga_sewa" class="col-sm-2 col-form-label">Harga Sewa/hari</label>
                <div class="col-sm-10">
                    <input value="<?php echo $fetch['Harga_Sewa_perHari']?>" type="text" class="form-control" name="harga_sewa">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                <div class="col-sm-10">
                    <input required="true" class="form-control" type="file" name="foto" accept=".jpg, .jpeg, .png" >
                </div>
            </div>


            <button type="submit" class="btn btn-dark" name="submit">Simpan</button>

        </form>
    </div>

    <footer class="login-box" style="margin-top: 100px">
    
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