<?php 
include("koneksi2.php");
$id = $_GET['id'];
$query = "DELETE FROM dosen WHERE id='$id'";
$sql = mysqli_query($db, $query);

if ($sql) {
    header ("Location: dosen.php");
}
else{
    echo"gagal menghapus data";
}
?>