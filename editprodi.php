<?php include('template/header.php'); ?>

<div class="container">
    <h1>Ubah Data Prodi</h1>
    <a href="prodi.php" class="btn btn-primary">Tampilkan Data Prodi</a>
    <?php
    include("koneksi2.php");
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $edit = mysqli_query($db, "SELECT * FROM prodi WHERE id='$id'");
        $data = mysqli_fetch_array($edit);
    }
    ?>
    <form action="proseseditprodi.php" method="POST">
        <input type="hidden" value="<?php echo $data['id']; ?>" name="id">
        <div class="mb-3">
            <label for="nama_prodi" class="form-label">Nama Prodi</label>
            <input type="text" class="form-control" id="nama_prodi" name="nama_prodi" value="<?php echo $data['nama_prodi']; ?>" required>
        </div>

        <!-- Jenjang -->
        <div class="mb-3">
            <label for="jenjang" class="form-label">Jenjang</label>
            <select class="form-select" name="jenjang" required>
                <option value="">Pilih jenjang</option>
                <option value="D4" <?php if($data['jenjang'] == 'D4') echo 'selected'; ?>>D4</option>
                <option value="D3" <?php if($data['jenjang'] == 'D3') echo 'selected'; ?>>D3</option>
                <option value="S1" <?php if($data['jenjang'] == 'S1') echo 'selected'; ?>>S1</option>
                <option value="S2" <?php if($data['jenjang'] == 'S2') echo 'selected'; ?>>S2</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo $data['keterangan']; ?>" required>
        </div>
        <input type="submit" class="btn btn-primary" value="SIMPAN" name="submit">
    </form>
</div>

<?php include('template/footer.php'); ?>
