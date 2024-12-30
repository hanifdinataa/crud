<?php
include("koneksi2.php");

if (isset($_POST['submit'])) {
    // Mengambil data dari form
    $nama_prodi = $_POST['nama_prodi'];
    $jenjang = $_POST['jenjang'];
    $keterangan = $_POST['keterangan'];

    // Query untuk menyimpan data ke dalam tabel prodi
    $query = "INSERT INTO prodi (nama_prodi, jenjang, keterangan) 
              VALUES ('$nama_prodi', '$jenjang', '$keterangan')";

    // Eksekusi query
    if (mysqli_query($db, $query)) {
       "<script>alert('Data berhasil disimpan'); window.location.href = 'prodi.php'</script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($db);
    }

    // Tutup koneksi
    mysqli_close($db);
}
?>
