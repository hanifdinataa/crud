
<?php 
include("koneksi2.php");
$kode_nim = $_GET['nim'];
$query = "DELETE FROM mahasiswa WHERE nim='$kode_nim'";
$sql = mysqli_query($db, $query);

if ($sql) {
    header("Location: prodi.php");
    header ("Location: mahasiswa.php");
}
else{
    echo"gagal menghapus data";
}
?>