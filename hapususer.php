<?php 
include("koneksi2.php");
$id = $_GET['id'];
$query = "DELETE FROM user WHERE id='$id'";
$sql = mysqli_query($db, $query);

if ($sql) {
    header ("Location: user.php");
}
else{
    echo"gagal menghapus data";
}
?>