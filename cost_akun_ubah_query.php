<?php
    include 'koneksi.php';

	if(ISSET($_POST['submit'])){
		$username = $_POST['username'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];
		$no_hp = $_POST['no_hp'];
		
        $conn->query("UPDATE pelanggan SET `Email`='$email',`Nama`='$username',`Alamat`='$alamat',`No_telp`='$no_hp' WHERE Id_pelanggan=4");
		echo "<script>alert('Ubah Data Berhasil');window.location='cost_akun.php';</script>";
	}
?>