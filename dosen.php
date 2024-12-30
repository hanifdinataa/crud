<?php include('template/header.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.13/jspdf.plugin.autotable.min.js"></script>

    <style>
        .dosen {
            text-align: center;
            margin-top: 11px;       
        }
        #jarak {
            margin-left: 10px;
        }
        #exportdosen {
            margin-left: 10px;
        }   
    </style>
</head>
<body>
<div class="container">
    <h1 class="dosen">Data Dosen</h1>
    <a href="indexdosen.php" class="btn btn-primary">Input Data DOSEN</a>
    <button id="exportdosen" class="btn btn-success">UNDUH PDF</button>
    <table class="table table-striped table-bordered" id="tabel-dosen">
        <thead>
            <tr>
                <th>No</th>
                <th>Nidn</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Gelar</th>  
                <th>Alamat</th>
                <th>No. Telepon</th>
                <th>Jenis Kelamin</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
          include("koneksi2.php");
          $query = "SELECT * FROM dosen";
          $sql = mysqli_query($db, $query);
          $no = 1;
          while ($row = mysqli_fetch_array($sql)) {
        ?>
            <tr>
                <td><?=$no++ ?></td>
                <td><?= $row['nidn'];?></td>
                <td><?= $row['nama'];?></td>
                <td><?= $row['jabatan'];?></td>
                <td><?= $row['gelar'];?></td>
                <td><?= $row['alamat'];?></td>
                <td><?= $row['no_telepon'];?></td>
                <td><?= $row['jenis_kelamin'];?></td>
                <td><?= $row['status'];?></td>
                <td>
                    <a href="editdosen.php?id=<?= $row['id']?>" class="btn btn-warning btn-sm">Edit</a>
                    <a onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" href="hapusdosen.php?id=<?= $row['id']?>" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <script>
        document.getElementById('exportdosen').addEventListener('click', function () {
            exportTableToPDF('tabel-dosen', 'dosen.pdf');
        });

        function exportTableToPDF(tableId, filename) {
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF();
            doc.autoTable({ html: '#' + tableId });
            doc.save(filename);
        }
    </script>
</div>
</body>
</html>

<?php include('template/footer.php')?>
