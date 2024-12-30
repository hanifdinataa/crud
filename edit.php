<?php
include("koneksi2.php");
$nim = $_GET['nim'];
$edit = mysqli_query($db, "SELECT m.*, p.nama_prodi FROM mahasiswa m JOIN prodi p ON m.prodi_id = p.id WHERE m.nim = '$nim'");
$data = mysqli_fetch_array($edit);
?>
<?php include("template/header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
    <style>
        * {
            margin: 0px 5px 0px 5px;
        } 
        
        .list {
            text-decoration: none;
        }

        #jarak {
            margin-left: 10px;
            margin-right: 10px;
        }
    </style>
</head>
<body>
<h2>Ubah Data Mahasiswa</h2>
<form method="post" action="prosesEditMhs.php" enctype="multipart/form-data">
    <p>Klik Disini<button id="jarak" type="button" class="btn btn-outline-primary"><a class="list" href="mahasiswa.php">Disini</a></button> Untuk Kembali ke List Mahasiswa</p>

    <div class="mb-3">
        <label for="nim" class="form-label">NIM</label>
        <input type="number" class="form-control" id="nim" name="nim" required value="<?php echo $data['nim']; ?>">
    </div>
    <div class="mb-3">
        <label for="nama_mhs" class="form-label">Nama Mahasiswa</label>
        <input type="text" class="form-control" id="nama_mhs" name="nama_mhs" required value="<?php echo $data['nama_mhs']; ?>">
    </div>
    <div class="mb-3">
        <label for="prodi_id" class="form-label">Prodi</label>
        <select class="form-select" name="prodi_id" required>
            <option value="<?php echo $data['prodi_id']; ?>"><?php echo $data['nama_prodi']; ?></option>
            <?php
                $query_prodi = mysqli_query($db, "SELECT * FROM prodi");
                while($prodi = mysqli_fetch_array($query_prodi)){
            ?>
            <option value="<?= $prodi['id']; ?>"><?= $prodi['nama_prodi']; ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required value="<?php echo $data['tgl_lahir']; ?>">
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" id="alamat" name="alamat" rows="3"><?php echo $data['alamat']; ?></textarea>
    </div>
    <div class="mb-3">
        <label for="foto" class="form-label">Foto</label>
        <input accept="image/*" class="form-control" type="file" id="foto" name="foto">
        <img src="foto/<?php echo $data['foto']; ?>" width="100px" alt="">
    </div>
    <input type="submit" class="btn btn-primary" value="Simpan" name="submit">
    <input type="reset" class="btn btn-danger" name="reset">
</form>
</body>
</html>
<?php include('template/footer.php'); ?>
