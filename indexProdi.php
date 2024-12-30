<?php include('template/header.php')?>

<div class="container">
    <h1>Input Data Prodi</h1>
    <a href="prodi.php" class="btn btn-primary">Tampilkan Data Prodi</a>

    <form action="prosesProdi.php" method="POST" enctype="multipart/form-data">
        <!-- nama prodi -->
        <div class="mb-3">
            <label for="nama_prodi" class="form-label">Masukkan Nama Prodi</label>
            <input type="text" class="form-control" id="nama_prodi" name="nama_prodi" required>
        </div>

        <!-- Jenjang -->
        <div class="mb-3">
            <label for="jenjang" class="form-label">Jenjang</label>
            <select class="form-select" name="jenjang" required>
                <option value="">Pilih Jenjang</option>
                <option value="D3">D3</option>
                <option value="D4">D4</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
            </select>
        </div>

        <!-- keterangan -->
        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan" required>
        </div>

        <input type="submit" class="btn btn-primary" value="SIMPAN" name="submit">
    </form>
</div>
<?php include('template/footer.php')?>
