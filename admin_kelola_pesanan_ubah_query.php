<?php
    include 'koneksi.php';

	if(ISSET($_POST['submit'])){
        $id = $_POST['id_pesanan'];
		$tgl_kirim = $_POST['tanggal_pengiriman'];
        $status = $_POST['ubah_status'];
		
        $conn->query("UPDATE `pesanan` SET `Tanggal_Pengiriman`='$tgl_kirim',`Status_Pesanan`='$status' WHERE Id_pesanan='$id'");
		echo "<script>alert('Ubah Data Berhasil');window.location='admin_kelola_pesanan.php';</script>";
	}
?>