<?php
include("koneksi2.php");

if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama_mhs = $_POST['nama_mhs'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
    $prodi_id = $_POST['prodi_id'];

    // cek apakah nim sudah ada di dalam tabel mahasiswa
    $cek_query = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
    $cek_sql = mysqli_query($db, $cek_query);

    if (mysqli_num_rows($cek_sql) > 0) {
        // jika ada
        echo "<script>alert('NIM sudah ada!'); window.location.href = 'index.php'</script>";
    } else {
        // jika tidak ada
        $target_dir = "foto/";
        $file_tmp = $_FILES['foto']['tmp_name'];
        $filename = $_FILES['foto']['name'];
        $target_file = $target_dir . $filename;

        // pindahkan file foto dari folder temporary ke folder yang dipilih
        if (move_uploaded_file($file_tmp, $target_file)) {
            $query = "INSERT INTO mahasiswa(nim, prodi_id, nama_mhs, tgl_lahir, alamat, foto) VALUES ('$nim', '$prodi_id', '$nama_mhs', '$tgl_lahir', '$alamat', '$filename')";
            $sql = mysqli_query($db, $query);

            if ($sql) {
                echo "<script>alert('Data berhasil disimpan'); window.location.href = 'mahasiswa.php'</script>";
            } else {
                echo "<script>alert('Data Gagal Disimpan'); window.location.href = 'index.php'</script>";
            }
        } else {
            echo "<script>alert('Upload foto gagal'); window.location.href = 'index.php'</script>";
        }
    }
}
?>
