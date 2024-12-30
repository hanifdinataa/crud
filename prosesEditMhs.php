<?php
include("koneksi2.php");

if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama_mhs = $_POST['nama_mhs'];
    $prodi_id = $_POST['prodi_id'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];

    
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $path = "foto/".$foto;

    if (!empty($foto)) {
        if (move_uploaded_file($tmp, $path)) {
            $update = mysqli_query($db, "UPDATE mahasiswa SET nama_mhs='$nama_mhs', prodi_id='$prodi_id', tgl_lahir='$tgl_lahir', alamat='$alamat', foto='$foto' WHERE nim='$nim'");
        } else {
            echo "<script>alert('Gagal mengunggah foto.'); window.location.href = 'edit.php?nim=$nim';</script>";
        }
    } else {
        $update = mysqli_query($db, "UPDATE mahasiswa SET nama_mhs='$nama_mhs', prodi_id='$prodi_id', tgl_lahir='$tgl_lahir', alamat='$alamat' WHERE nim='$nim'");
    }

    if ($update) {
        echo "<script>alert('Data berhasil diubah'); window.location.href = 'mahasiswa.php';</script>";
    } else {
        echo "<script>alert('Maaf, data gagal diubah'); window.location.href = 'edit.php?nim=$nim';</script>";
    }
}
?>
