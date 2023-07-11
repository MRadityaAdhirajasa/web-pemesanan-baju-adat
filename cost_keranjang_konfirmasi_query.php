<?php
    include 'koneksi.php';

	if(ISSET($_POST['submit'])){
        $id = $_POST['id'];
		$status = $_POST['status_pesanan'];
        $tanggal = $_POST['tanggal_pesanan'];
        $tanggal2 = $_POST['tanggal_pesanan'];
        // $metode = $_POST['metode_bayar'];
        $sewa = $_POST['lama_sewa'];
        $harga = $_POST['harga'];
		
        $conn->query("INSERT INTO `pesanan`(`Id_pesanan`, `Tanggal_Pesanan`, `Tanggal_Pengiriman`, `Id_Produk`, `Lama_sewa`, `Total_Harga`, `Status_Pesanan`, `notif`, `Harga`) 
        VALUES (null,'$tanggal',null,'$id','$sewa',null,'menunggu', null, $harga)");

        $conn->query("UPDATE `pesanan` SET `Total_Harga`=(Harga*Lama_sewa)");

        $conn->query("INSERT INTO `pembayaran`(`Id_Pembayaran`, `Total_Pembayaran`, `Metode_pembayaran`, `Tanggal_Pembayaran`, `Status_Pembayaran`, `Id_Pesanan`) 
        VALUES (null,null,null,'$tanggal','Lunas',null)");

		echo "<script>alert('Pemesanan Berhasil');window.location='cost_masuk.php';</script>";
	}
?>