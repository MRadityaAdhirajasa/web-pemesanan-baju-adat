<?php
	if(ISSET($_POST['submit'])){
		$email = $_POST['email'];
        $username = $_POST['username'];
		
        $conn->query("INSERT INTO pelanggan (`Id_pelanggan`, `Email`, `Nama`, `Alamat`, `No_telp`) 
        VALUES (null,'$email','$username',null,null)");
		echo "<script>alert('Pendaftaran Berhasil!!');window.location='login.php';</script>";
	}
?>