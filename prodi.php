<?php include('template/header.php')?>

<title>Document</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.13/jspdf.plugin.autotable.min.js"></script>

<div class="container">
    <h1>Data Prodi</h1>
    <a href="indexProdi.php" class="btn btn-primary">Input Data Prodi</a>
    <button id="exportprodi" class="btn btn-success">UNDUH PDF</button>

    <table class="table table-striped table-bordered" id="tabel-mahasiswa">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Prodi</th>
                <th>Jenjang</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("koneksi2.php");
            $query = "SELECT * FROM prodi";
            $sql = mysqli_query($db, $query);
            $no = 1;
            while ($row = mysqli_fetch_array($sql)) {
            ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['nama_prodi']; ?></td>
                    <td><?= $row['jenjang']; ?></td>
                    <td><?= $row['keterangan']; ?></td>
                    <td>
                        <a href="editprodi.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" href="hapusprodi.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<script>
    document.getElementById('exportprodi').addEventListener('click', function () {
        exportTableToPDF('tabel-mahasiswa', 'prodi.pdf');
    });

    function exportTableToPDF(tableId, filename) {
        const { jsPDF } = window.jspdf;
        const doc = new jsPDF();
        doc.autoTable({ html: '#' + tableId });
        doc.save(filename);
    }
</script>

<?php include('template/footer.php')?>
