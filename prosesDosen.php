<?php
include("koneksi2.php");

if (isset($_POST['submit'])) {
    $nidn = $_POST['nidn'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $gelar = $_POST['gelar'];
    $alamat = $_POST['alamat'];
    $no_telepon = $_POST['no_telepon'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $status = $_POST['status'];

    
    $query = "INSERT INTO dosen (nidn, nama, jabatan, gelar, alamat, no_telepon, jenis_kelamin, status) 
              VALUES ('$nidn', '$nama', '$jabatan', '$gelar', '$alamat', '$no_telepon', '$jenis_kelamin', '$status')";

  
    if (mysqli_query($db, $query)) {
        echo "<script>alert('Data berhasil disimpan'); window.location.href = 'dosen.php'</script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($db);
    }
 

    
    mysqli_close($db);
}
?>
