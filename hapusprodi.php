<?php 
include("koneksi2.php");
$kode_nim = $_GET['id'];
$query = "DELETE FROM prodi WHERE id='$kode_nim'";
$sql = mysqli_query($db, $query);

if ($sql) {
    header("Location: prodi.php");
} else {
    echo "Gagal menghapus data";
}
?>
