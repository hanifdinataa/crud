<?php
include("koneksi2.php");

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nidn = $_POST['nidn'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $gelar = $_POST['gelar'];
    $alamat = $_POST['alamat'];
    $no_telepon = $_POST['no_telepon'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $status = $_POST['status'];

    $update = mysqli_query($db, "UPDATE dosen SET nidn='$nidn', nama='$nama', jabatan='$jabatan', gelar='$gelar', alamat='$alamat', no_telepon='$no_telepon', jenis_kelamin='$jenis_kelamin', status='$status' WHERE id='$id'");
    
    if ($update) {
        header("Location: dosen.php");
    } else {
        echo "Maaf, data gagal diubah.";
    }
}
?>
