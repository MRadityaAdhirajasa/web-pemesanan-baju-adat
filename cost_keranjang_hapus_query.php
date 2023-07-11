<?php
include "koneksi.php";
$query = "DELETE FROM pesanan WHERE Id_pesanan='" . $_GET["Id_pesanan"] . "'";

if ( mysqli_query($conn, $query)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($mysqli);
}

echo "<script>alert('Hapus pesanan Berhasil!!');window.location='cost_keranjang.php';</script>";