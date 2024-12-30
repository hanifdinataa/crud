<?php include('template/header.php'); ?>

<?php
include("koneksi2.php");

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password sebelum disimpan
    $role = $_POST['role'];

    // Query untuk menyimpan data user
    $query = "INSERT INTO users (nama, email, password, role) VALUES (?, ?, ?, ?)";
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param("ssss", $nama, $email, $password, $role);

    if ($stmt->execute()) {
        echo "Data berhasil disimpan";
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>

<a href="indexUser.php" class="btn btn-primary">Kembali</a>

<?php include('template/footer.php'); ?>
