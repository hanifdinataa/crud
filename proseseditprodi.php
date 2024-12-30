<?php
include("koneksi2.php");

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama_prodi = $_POST['nama_prodi'];
    $jenjang = $_POST['jenjang'];
    $keterangan = $_POST['keterangan'];

    $update = mysqli_query($db, "UPDATE prodi SET nama_prodi='$nama_prodi', jenjang='$jenjang', keterangan='$keterangan' WHERE id='$id'");
    
    if ($update) {
        header("Location: prodi.php");
    } else {
        echo "Maaf, data gagal diubah.";
    }
}
?>
