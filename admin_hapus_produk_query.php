<?php
include "koneksi.php";
$query = "DELETE FROM produk WHERE Id_Produk='" . $_GET["Id_Produk"] . "'";

if ( mysqli_query($conn, $query)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($mysqli);
}

echo "<script>alert('Hapus Data Berhasil!!');window.location='admin_kelola_produk.php';</script>";