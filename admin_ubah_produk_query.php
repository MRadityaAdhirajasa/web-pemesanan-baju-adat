<?php
    include 'koneksi.php';

	if(ISSET($_POST['submit'])){
        $id = $_POST['id'];
		$nama_produk = $_POST['nama_produk'];
        $deskripsi = $_POST['deskripsi'];
        $stok = $_POST['stok'];
		$harga_sewa = $_POST['harga_sewa'];
		$foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
		$foto_name = addslashes($_FILES['foto']['name']);
		$foto_size = getimagesize($_FILES['foto']['tmp_name']);
		move_uploaded_file($_FILES['foto']['tmp_name'],"img/" . $_FILES['foto']['name']);
		
        $conn->query("UPDATE produk SET `Nama_Produk`='$nama_produk',`Deskripsi_Produk`='$deskripsi',`Harga_Sewa_perHari`='$harga_sewa',`Stok`='$stok',`foto`='$foto_name' WHERE Id_Produk='$id'");
		echo "<script>alert('Ubah Data Berhasil');window.location='admin_kelola_produk.php';</script>";
	}
?>