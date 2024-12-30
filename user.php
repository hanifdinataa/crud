<?php include('template/header.php') ?>

<h3 class="text-center">List Data User</h3>
<div class="container">
    <h1>Data User</h1>
    <a href="index.php" class="btn btn-primary">Input User Baru</a>
    <button id="download-pdf" class="btn btn-success">Unduh PDF</button>
    <table id="tabel-user" class="table table-hover table-striped" >
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("koneksi2.php");
            $query = "SELECT * FROM user";
            $sql = mysqli_query($db, $query);
            $no = 1;
            while ($row = mysqli_fetch_array($sql)) {
            ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['email']; ?></td>
                    <td><?= $row['role']; ?></td>
                    <td>
                        <a href="edituser.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a onclick="return confirm('Apakah ingin dihapus')" href="hapususer.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.13/jspdf.plugin.autotable.min.js"></script>
<script>
    document.getElementById('download-pdf').addEventListener('click', function () {
        exportTableToPDF('tabel-user', 'data_user.pdf');
    });

    function exportTableToPDF(tableId, filename) {
        const { jsPDF } = window.jspdf;
        const doc = new jsPDF();
        doc.autoTable({ html: '#' + tableId });
        doc.save(filename);
    }
</script>

<?php include('template/footer.php') ?>
