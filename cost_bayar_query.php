<?php
    include 'koneksi.php';

	if(ISSET($_POST['submit'])){
        $total = $_POST['total'];
        $metode = $_POST['metode_bayar'];
		
        $conn->query("UPDATE `pembayaran` SET `Total_Pembayaran`='$total',`Metode_pembayaran`='$metode'");

		echo "<script>alert('Pemesanan Berhasil');window.location='cost_masuk.php';</script>";
	}
?>