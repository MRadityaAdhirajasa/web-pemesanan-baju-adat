<?php
    include 'koneksi.php';

	if(ISSET($_POST['submit'])){
        $id = $_POST['id_pesanan'];
		$notif = $_POST['notif'];
        $status = $_POST['ubah_status'];
		
        $conn->query("UPDATE `pesanan` SET `Status_Pesanan`='$status',`notif`='$notif' WHERE Id_pesanan='$id'");
		echo "<script>alert('Ubah Data Berhasil');window.location='eks_notifikasi.php';</script>";
	}
?>