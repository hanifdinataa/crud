<?php include('template/header.php'); ?>

<div class="container">
    <h1>UBAH DATA DOSEN</h1>
    <a href="dosen.php" class="btn btn-primary">Tampilkan Data Dosen</a>
    <?php

    include("koneksi2.php");
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $edit = mysqli_query($db, "SELECT * FROM dosen WHERE id='$id'");
        $data = mysqli_fetch_array($edit);
    }
    ?>
    <form action="proseseditdosen.php" method="POST">

        <!-- NIdn -->
        <div class="mb-3">
        <label for="nidn" class="form-label">Nidn</label>
        <input type="text" class="form-control" id="nidn" name="nidn" required value="<?php echo $data['nidn']; ?>">
         </div>

        <!-- Nama Dosen -->
        <div class="mb-3">
        <label for="nama" class="form-label">Nama Dosen</label>
        <input type="text" class="form-control" id="nama" name="nama" required value="<?php echo $data['nama']; ?>">
         </div>

         <!-- jabatan -->
         <div class="mb-3">
        <label for="jabatan" class="form-label">Jabatan</label>
        <input type="text" class="form-control" id="jabatan" name="jabatan" required value="<?php echo $data['jabatan']; ?>">
         </div>

         <!-- Gelat -->
         <div class="mb-3">
        <label for="gelar" class="form-label">Gelar</label>
        <input type="text" class="form-control" id="gelar" name="gelar" required value="<?php echo $data['gelar']; ?>">
         </div>

         <!-- alamat -->
         <div class="mb-3">
        <label for="alamat" class="form-label">Alamat Rumah</label>
        <textarea class="form-control" id="alamat" name="alamat" rows="3"><?php echo $data['alamat']; ?></textarea>
         </div>

         <!-- Nomor Telepon -->
         <div class="mb-3">
        <label for="no_telepon" class="form-label">Nomor Telepon</label>
        <input type="number" class="form-control" id="no_telepon" name="no_telepon" required value="<?php echo $data['no_telepon']; ?>">
       

        <!-- Jenis Kelamin -->
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select class="form-select" name="jenis_kelamin" required>
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Laki Laki" <?php if($data['jenis_kelamin'] == 'Laki Laki') echo 'selected'; ?>>Laki Laki</option>
                <option value="Perempuan" <?php if($data['jenis_kelamin'] == 'Perempuan') echo 'selected'; ?>>Perempuan</option>
            </select>
        </div>
    
       <!-- Status -->
       <div class="mb-3">
            <label for="status" class="form-label">Status Saat ini</label>
            <select class="form-select" name="status" required>
                <option value="">Pilih Status</option>
                <option value="Aktif" <?php if($data['status'] == 'Aktif') echo 'selected'; ?>>Aktif</option>
                <option value="Tidak Aktif" <?php if($data['status'] == 'Tidak Aktif') echo 'selected'; ?>>Tidak Aktif</option>
            </select>
        </div>
          
        <!-- Simpan / Submit -->
        <input type="submit" class="btn btn-primary" value="SIMPAN" name="submit">
    </form>
</div>

<?php include('template/footer.php'); ?>
