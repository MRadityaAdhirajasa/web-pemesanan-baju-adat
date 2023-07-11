<?php
	if(ISSET($_POST['submit'])){
		$nama_produk = $_POST['nama_produk'];
        $deskripsi = $_POST['deskripsi'];
        $stok = $_POST['stok'];
		$harga_sewa = $_POST['harga_sewa'];
		$foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
		$foto_name = addslashes($_FILES['foto']['name']);
		$foto_size = getimagesize($_FILES['foto']['tmp_name']);
		move_uploaded_file($_FILES['foto']['tmp_name'],"img/" . $_FILES['foto']['name']);
		
        $conn->query("INSERT INTO `produk`(`Id_Produk`, `Nama_Produk`, `Deskripsi_Produk`, `Harga_Sewa_perHari`, `Stok`, `foto`) 
		VALUES (null,'$nama_produk','$deskripsi','$harga_sewa','$stok','$foto_name')");
		echo "<script>alert('Tambah Data Berhasil!!');window.location='admin_kelola_produk.php';</script>";
	}
?>