<?php include('template/header.php')?>

<div class="container">
    <h1>Input Data Dosen</h1>
    <a href="dosen.php" class="btn btn-primary">Tampilkan Data Dosen</a>

    <form action="prosesDosen.php" method="POST" enctype="multipart/form-data">
        <!-- nidn -->
        <div class="mb-3">
            <label for="nidn" class="form-label">Masukkan Nidn</label>
            <input type="number" class="form-control" id="nidn" name="nidn" required>
        </div>

        <!-- Nama -->
        <div class="mb-3">
            <label for="nama" class="form-label">Masukkan Nama Dosen</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>

        <!-- Jabatan -->
        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan Dosen</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" required>
        </div>

        <!-- Gelar -->
        <div class="mb-3">
            <label for="gelar" class="form-label">Gelar Dosen</label>
            <input type="text" class="form-control" id="gelar" name="gelar" required>
        </div>

        <!-- Alamat -->
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat Rumah</label>
            <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
        </div>

        <!-- No Telepon -->
        <div class="mb-3">
            <label for="no_telepon" class="form-label">Nomor Telepon</label>
            <input type="number" class="form-control" id="no_telepon" name="no_telepon" required>
        </div>

        <!-- Jenis Kelamin -->
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>

        <!-- Status -->
        <div class="mb-3">
            <label for="status" class="form-label">Status Sekarang</label>
            <select class="form-select" name="status" required>
                <option value="">Pilih Status</option>
                <option value="Aktif">Aktif</option>
                <option value="Tidak Aktif">Tidak Aktif</option>
            </select>
        </div>
        <input type="submit" class="btn btn-primary" value="SIMPAN" name="submit">
    </form>
</div>
<?php include('template/footer.php')?>
